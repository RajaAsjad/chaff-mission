<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\Booking;
use Session;
use Stripe;
use Auth;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function stripe($booking_number)
    {
        $booking_details = Booking::where('booking_number', $booking_number)->first();
        $product = Product::where('slug', $booking_details->product_slug)->first();
        
        // get from and throung date
        $from_date = Carbon::parse(date('Y-m-d', strtotime($booking_details->trip_start_date))); 
        $through_date = Carbon::parse(date('Y-m-d', strtotime($booking_details->trip_end_date))); 
            
        // get total number of minutes between from and throung date
        $total_days = $from_date->diffInDays($through_date);

        return view('website.payment.stripe', compact('product', 'total_days', 'booking_details'));
    }

    public function stripePost(Request $request)
    {
        $booking_number = Session::get('booking');

        $bookings = Booking::where('booking_number', $booking_number)->first();

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $response = Stripe\Charge::create ([
            "amount" => 100*$bookings->total_payment,
            "currency" => "INR",
            "source" => $request->stripeToken,
            "description" => "This payment is testing purpose",
        ]);

        if($response){
            $payment = Payment::create([
                'customer_id' => Auth::user()->id,
                'order_number' => $booking_number,
                'total_payment' => $bookings->total_payment,
                'paid' => $bookings->total_payment,
                'dues' => $bookings->total_payment-$bookings->total_payment,
                'payment_status' => $response['status'],
            ]);

            if($payment){
                PaymentDetail::create([
                    'order_number' => $booking_number,
                    'transaction_id' => $booking_number,
                    'transaction_date' => date('Y-m-d'),
                    'name_on_card' => date('Y-m-d'),
                    'expiration_month' => date('Y-m-d'),
                    'expiration_year' => date('Y-m-d'),
                ]);

                $bookings->payment_status = 'paid';
                $bookings->save(); 
            }
        }
   
        Session::flash('success', 'Payment Successful !');
        Session::forget('booking');
        return redirect()->route('home');
    }
}