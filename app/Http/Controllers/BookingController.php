<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\PickDropLocation;
use Auth; 

class BookingController extends Controller
{
    public function create()
    {
        return view('website.payment.stripe');
    }
    public function store(Request $request)
    {
        // return $request;

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
            'per_day_price' => 2,
            'total_days' => 2,
            'total_payment' => 2,
            'status' => 0,
        ]);

        if($booking){
            PickDropLocation::create([
                'booking_id' => $booking->id,
                'pickup_address' => $request->pickup_address,
                'pickup_state' => $request->pickup_state,
                'pickup_country_name' => $request->pickup_country_name,
                'drop_address' => $request->drop_address,
                'drop_state' => $request->drop_state,
                'drop_country_name' => $request->drop_country_name,
            ]);
        }

        // return 'success';
        return redirect()->route('booking.create');
    }
}
