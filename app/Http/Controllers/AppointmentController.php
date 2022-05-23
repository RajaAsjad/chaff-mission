<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarType;
use App\Models\Appointment;
use Auth;
use Event as mycalendarevent;
use Carbon;

class AppointmentController extends Controller
{
    public function create()
    {
        $e = mycalendarevent::get();
        dd($e);

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

        $event = new mycalendarevent;
        $event->name = $request->description;
        $event->startDateTime = Carbon\Carbon::now();
        $event->endDateTime = Carbon\Carbon::now()->addHour();
        $event->save();
        /* $e = Event::get();
        dd($e) */

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

    public function appointmentDetail()
    {
        
      $page_title = 'All Appointment Details';
      $appointments = Appointment::where('status',1)->get();      
      return view('website.user-dashboard.appointment-detail', compact('appointments' , 'page_title'));
    }

}

