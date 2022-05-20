<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\PickDropLocation;
use App\Models\Product;
use Carbon\Carbon;
use Auth; 
use Session;

class BookingController extends Controller
{

    public function index(Request $request)
    {
        if($request->ajax()){
            if(Auth::user()->hasRole('Admin')){
                $query = Booking::orderby('id', 'desc')->where('id', '>', 0);
            }elseif(Auth::user()->hasRole('Customer')){
                $query = Booking::orderby('id', 'desc')->where('customer_id', Auth::user()->id)->where('id', '>', 0);
            }
            if($request['search'] != ""){
                $query->where('booking_number', 'like', '%'. $request['search'] .'%')
                    ->orWhere('product_slug', 'like', '%'. $request['search'] .'%')
                    ->orWhere('trip_start_date', 'like', '%'. $request['search'] .'%');
            }
            if($request['status']!="All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
                $query->where('status', $request['status']);
            }
            $models = $query->paginate(10);
            return (string) view('admin.bookings.search', compact('models'));
        }
        $page_title = 'All Bookings';
        if(Auth::user()->hasRole('Admin')){
            $models = Booking::orderby('id', 'desc')->paginate(10);
        }elseif(Auth::user()->hasRole('Customer')){
            $models = Booking::orderby('id', 'desc')->where('customer_id', Auth::user()->id)->paginate(10);
        }
        
        return View('admin.bookings.index', compact("models", "page_title"));
    }
    public function store(Request $request)
    {
        // get from and throung date
        $from_date = Carbon::parse(date('Y-m-d', strtotime($request->trip_start_date))); 
        $through_date = Carbon::parse(date('Y-m-d', strtotime($request->trip_end_date))); 
            
        // get total number of minutes between from and throung date
        $shift_difference = $from_date->diffInDays($through_date);

        // will output $shift_difference = 2

        do{
            $booking_number = rand(100000,999999);
        }while(Booking::where('booking_number', $booking_number)->first());

        $booking = Booking::create([
            'customer_id' => Auth::user()->id,
            'booking_number' => $booking_number,
            'product_slug' => $request->product_slug,
            'trip_start_date' => date('Y-m-d', strtotime($request->trip_start_date)),
            'trip_start_time' => $request->trip_start_time,
            'trip_end_date' => date('Y-m-d', strtotime($request->trip_end_date)),
            'trip_end_time' => $request->trip_end_time,
            'per_day_price' => $request->per_day_rent,
            'total_days' => $shift_difference,
            'total_payment' => $shift_difference*$request->per_day_rent,
            'status' => 0,
        ]);

        if($booking){
            PickDropLocation::create([
                'booking_id' => $booking->id,
                'pickup_city_id' => $request->pickup_city_id,
                'pickup_state' => $request->pickup_state,
                'pickup_address' => $request->pickup_address,
                'drop_city_id' => $request->drop_city_id,
                'drop_state_id' => $request->drop_state_id,
                'drop_address' => $request->drop_address,
            ]);
        }

        Session::put('booking', $booking_number);

        return redirect()->route('stripe.create', $booking_number);
    }

    public function show($booking_number)
    {
        $bookings = Booking::where('booking_number', $booking_number)->first();
        $page_title = 'Booking Details';
        return view('admin.bookings.show', compact('bookings', 'page_title'));
    }

    public function edit($booking_number)
    {
        $booking_details = Booking::where('booking_number', $booking_number)->first();
        $booking_details->status = 3;
        $booking_details->save();
        
        return redirect()->route('rentals');
    }

    public function invoice($booking_number)
    {
        return $booking_number;
    }
}
