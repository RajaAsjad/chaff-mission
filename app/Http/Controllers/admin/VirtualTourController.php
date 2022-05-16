<?php

namespace App\Http\Controllers\admin;

use App\Models\Virtual_tour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Auth;

class VirtualTourController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:virtualtour-list|virtualtour-create|virtualtour-edit|virtualtour-delete', ['only' => ['index','store']]);
        $this->middleware('permission:virtualtour-create', ['only' => ['create','store']]);
        $this->middleware('permission:virtualtour-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:virtualtour-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = Virtual_tour::orderby('id' , 'desc')->where('id' , '>' , 0);
            if($request['search'] != ""){
                $query->where('name' , 'like' , '%' .$request['search'] .'%');
            }
            if($request['status'] != "All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
                $query->where('status' , $request['status']);
            }
            $tours=$query->paginate(10);
            return (string) view('admin.virtual_tour.search' , compact('tours'));
        }

        $page_title ='All Virtual Tour';
        $tours= Virtual_tour::orderby('id' , 'desc')->paginate(10);
        return view('admin.virtual_tour.index' , compact('tours' , 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title= 'Add Virtual Tour';
        return view('admin.virtual_tour.create' , compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $tours = new Virtual_tour();

        if(isset($request->image)){
            $photo= date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/assets/images/virtual_tour'), $photo);
            $tours->image = $photo;
        }

        $tours->created_by = Auth::user()->id;
        $tours->name = $request->name;
        $tours->slug = \Str::slug($request->name);
        $tours->description = $request->description;
        $tours->save();

        return redirect()->route('tour.index')->with('message' , 'Virtual Tour added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Virtual_tour  $virtual_tour
     * @return \Illuminate\Http\Response
     */
    public function show(Virtual_tour $virtual_tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Virtual_tour  $virtual_tour
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $page_title='Edit Virtual Tour';
        $tours= Virtual_tour::where('slug' , $slug)->first();
        return view('admin.virtual_tour.edit' , compact('page_title' , 'tours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Virtual_tour  $virtual_tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $slug)
    {
        $update = Virtual_tour::where('slug', $slug)->first();
      

        if (isset($request->image)) {
            $photo = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $Image = $request->image->move(public_path('/admin/assets/images/virtual_tour'), $photo);
            $update->image = $photo;
        }

        $update->name = $request->name;
        $update->slug = \Str::slug($request->name);
        $update->description = $request->description;
        $update->status = $request->status;
        $update->update();

        return redirect()->route('tour.index')->with('message', 'Virtual Tour Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Virtual_tour  $virtual_tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $tours = Virtual_tour::where('slug', $slug)->first();
        if ($tours) {
            $tours->delete();
            return true;
        } else {
            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
