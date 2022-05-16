<?php

namespace App\Http\Controllers\admin;

use App\Models\steps_of_rent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use File;

class StepsOfRentController extends Controller
{
    function _construct()
    {
    $this->middleware('permission:car_rent-list|car_rent-create|car_rent-edit|car_rent-delete' , ['only' => ['index' , 'store']]);
    $this->middleware('permission:car_rent-create' , ['only' => ['create' , 'store']]);
    $this->middleware('permission:car_rent-edit' , ['only' => ['edit' , 'update']]);
    $this->middleware('permission:car_rent-delete' , ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query=steps_of_rent::orderby('id' , 'desc')->where('status' , '>' , 0);
            if($request['search'] != ""){
                $query->where('heading' , 'like' , '%' .$request['search']. '%');
            }
            if($request['status'] != "All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
            $query->where('status' , $request['status']);
            }
        $car_rents=$query->paginate(10);
        return (string) view('admin.car_rent.search' , compact('car_rents'));
        }
        
        $page_title="All Car Rent";
        $car_rents=steps_of_rent::orderby('id' , 'desc')->paginate(10);
        return view('admin.car_rent.index' , compact('car_rents' , 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title="Add Car Rent";
        return view('admin.car_rent.create' , compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=$request->validate([
            'heading' => 'required',
        ]);

        $car_rents = new steps_of_rent;

        if(isset($request->image)){
            $photo=date('y-m-d-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/assets/images/car_rent'), $photo);
            $car_rents->image=$photo;
        }
        
        $car_rents->created_by = Auth::user()->id;
        $car_rents->slug = \Str::slug($request->heading);
        $car_rents->heading = $request->heading;
        $car_rents->description = $request->description;
        $car_rents->save();

        return redirect()->route('car_rent.index')->with('message' , 'Car Rent Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $page_title="Add Car Rent";
        $car_rents=steps_of_rent::where('slug' , $slug)->first();
        return view('admin.car_rent.edit' , compact('car_rents' , 'page_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $slug)
    {
        $validator=$request->validate([
            'heading' => 'required',
        ]);

        $updates = steps_of_rent::where('slug', $slug)->first();

        if(isset($request->image)){
            $photo=date('YmdHis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/assets/images/car_rent'), $photo);
            $updates->image=$photo;
        }

        $updates->created_by = Auth::user()->id;
        $updates->slug = \Str::slug($request->heading);
        $updates->heading = $request->heading;
        $updates->description = $request->description;
        $updates->status = $request->status;
        $updates->update();

        return redirect()->route('car_rent.index')->with('message' , 'Car Rent Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $car_rents=steps_of_rent::where('slug' , $slug)->first();
        if($car_rents){
            $car_rents->delete();
            return true;
        }
        else{
            return response()->json(['message' => 'Failed'], 404);
        }
    }
}
