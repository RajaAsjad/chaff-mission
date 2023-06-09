<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DB;
use Hash;

class WebController extends Controller
{
    public function paragon ()
    {
        $page_title = 'Paragon Logistic';
        return view('website.index', compact('page_title'));
    }

    public function express()
    {
        $page_title = 'Express Shipping';
        return view('website.express-shipping'  , compact('page_title'));
    }
    public function skywayShipping()
    {
        $page_title = 'Skyway Shipping';
        return view('website.skyway-shipping'  , compact('page_title'));
    }
    public function massShipping()
    {
        $page_title = 'Mass Shipping';
        return view('website.mass-shipping'  , compact('page_title'));
    }
    public function sixStartLogistic()
    {
        $page_title = 'Six Start Logistics';
        return view('website.six-start-logistic'  , compact('page_title'));
    }



}

