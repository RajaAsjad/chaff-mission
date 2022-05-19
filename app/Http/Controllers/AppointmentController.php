<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarType;
use App\Models\Appointment;
use Auth;

class AppointmentController extends Controller
{
    public function create()
    {
        
      $cartypes = CarType::where('status',1)->get();      
      return view('website.appointment.bookAppointment', compact('cartypes'));
    }

    public function store(Request  $request)
    {
        $validator = $request->validate([
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'car_type' => 'required',
            'pickup_date' => 'required',
            'pickup_time' => 'required',
            'return_date' => 'required',
            'return_time' => 'required',
        ]);
        
        $model = new Appointment();
        $model->customer_id = Auth::user()->id;
        $model->car_type_slug = $request->car_type;
        $model->address = $request->address;
        $model->city = $request->city;
        $model->state = $request->state;
        $model->pickup_date = $request->pickup_date;
        $model->pickup_time = $request->pickup_time;
        $model->return_date = $request->return_date;
        $model->return_time = $request->return_time;
        $model->description = $request->description;
        $model->save();
        return redirect()->route('book-appointment')->with('success', 'Appointment resquest sent auccessfully');
    }

}
