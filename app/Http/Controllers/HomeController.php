<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ParagonLogistic;
use App\Models\ExpressShipping;
use App\Models\SkywayShipping;
use App\Models\MassShipping;
use App\Models\SixStarLogistic;

use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->hasRole('Admin')){
            $page_title = 'Dashboard';
            $total_paragon=ParagonLogistic::where('status' , 1)->count();
            $total_express=ExpressShipping::where('status' , 1)->count();
            $total_skyway=SkywayShipping::where('status' , 1)->count();
            $total_mass=MassShipping::where('status' , 1)->count();
            $total_sixStar=SixStarLogistic::where('status' , 1)->count();
            return view('admin.dashboard.dashboard', compact('page_title','total_paragon','total_express','total_skyway','total_mass','total_sixStar'));

        }else{
            return redirect()->route('admin.login');
        }
    }
}
