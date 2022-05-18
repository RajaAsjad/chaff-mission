<?php

namespace App\Http\Controllers\admin;

use App\Models\HowToRent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use File;

class HowToRentController extends Controller
{
    function _construct()
    {
    $this->middleware('permission:how_to_rent-list|how_to_rent-create|how_to_rent-edit|how_to_rent-delete' , ['only' => ['index' , 'store']]);
    $this->middleware('permission:how_to_rent-create' , ['only' => ['create' , 'store']]);
    $this->middleware('permission:how_to_rent-edit' , ['only' => ['edit' , 'update']]);
    $this->middleware('permission:how_to_rent-delete' , ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query=HowToRent::orderby('id' , 'desc')->where('status' , '>' , 0);
            if($request['search'] != ""){
                $query->where('heading' , 'like' , '%' .$request['search']. '%');
            }
            if($request['status'] != "All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
            $query->where('status' , $request['status']);
            }
            $how_to_rents=$query->paginate(10);
            return (string) view('admin.how_to_rent.search' , compact('how_to_rents'));
        }
        
        $page_title="All How To Rents";
        $how_to_rents = HowToRent::orderby('id' , 'desc')->paginate(10);
        return view('admin.how_to_rent.index' , compact('how_to_rents' , 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title="Add New How to Rent";
        return view('admin.how_to_rent.create' , compact('page_title'));
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

        $how_to_rents = new HowToRent;

        if(isset($request->image)){
            $photo=date('y-m-d-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/assets/images/how_to_rents'), $photo);
            $how_to_rents->image=$photo;
        }
        
        $how_to_rents->created_by = Auth::user()->id;
        $how_to_rents->slug = \Str::slug($request->heading);
        $how_to_rents->heading = $request->heading;
        $how_to_rents->description = $request->description;
        $how_to_rents->save();

        return redirect()->route('how_to_rent.index')->with('message' , 'Car Rent Added Successfully');

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
        $page_title="Edit How to Rent";
        $how_to_rents=HowToRent::where('slug' , $slug)->first();
        return view('admin.how_to_rent.edit' , compact('how_to_rents' , 'page_title'));
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

        $updates = HowToRent::where('slug', $slug)->first();

        if(isset($request->image)){
            $photo=date('YmdHis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/assets/images/how_to_rents'), $photo);
            $updates->image=$photo;
        }

        $updates->created_by = Auth::user()->id;
        $updates->slug = \Str::slug($request->heading);
        $updates->heading = $request->heading;
        $updates->description = $request->description;
        $updates->status = $request->status;
        $updates->update();

        return redirect()->route('how_to_rent.index')->with('message' , 'Car Rent Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $how_to_rents=HowToRent::where('slug' , $slug)->first();
        if($how_to_rents){
            $how_to_rents->delete();
            return true;
        }
        else{
            return response()->json(['message' => 'Failed'], 404);
        }
    }
}
