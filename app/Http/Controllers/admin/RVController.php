<?php

namespace App\Http\Controllers\admin;

use App\Models\RV;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Auth;

class RVController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:rv-list|rv-create|rv-edit|rv-delete', ['only' => ['index','store']]);
        $this->middleware('permission:rv-create', ['only' => ['create','store']]);
        $this->middleware('permission:rv-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:rv-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            if($request->ajax()){
                $query = RV::orderby('id' , 'desc')->where('id' , '>' , 0);
                if($request['search'] != ""){
                    $query->where('name' , 'like' , '%' .$request['search'] .'%');
                }
                if($request['status'] != "All"){
                    if($request['status']==2){
                        $request['status'] = 0;
                    }
                    $query->where('status' , $request['status']);
                }
                $rvs=$query->paginate(10);
                return (string) view('admin.RV.search' , compact('rvs'));
            }

            $page_title ='All R.V';
            $rvs= RV::orderby('id' , 'desc')->paginate(10);
            return view('admin.RV.index' , compact('rvs' , 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title= 'Add R.V';
        return view('admin.RV.create' , compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'price' => 'required',
            'description' => 'required|max:1000',
        ]);

        $rvs = new RV();

        if(isset($request->image)){
            $photo= date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/assets/images/RV'), $photo);
            $rvs->image = $photo;
        }

        $rvs->created_by = Auth::user()->id;
        $rvs->name = $request->name;
        $rvs->slug = \Str::slug($request->name);
        $rvs->seat = $request->seat;
        $rvs->price = $request->price;
        $rvs->short_description = $request->short_description;
        $rvs->description = $request->description;
        $rvs->save();

        return redirect()->route('rv.index')->with('message' , 'R.V added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RV  $rV
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RV  $rV
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $page_title='Edit R.V';
        $rvs= RV::where('slug' , $slug)->first();
        return view('admin.rv.edit' , compact('page_title' , 'rvs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RV  $rV
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $slug)
    {
        $updates = RV::where('slug', $slug)->first();
        $validator = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required|max:1000',
        ]);

        if (isset($request->image)) {
            $photo = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $Image = $request->image->move(public_path('/admin/assets/images/RV'), $photo);
            $update->image = $photo;
        }

        $updates->name = $request->name;
        $updates->slug = \Str::slug($request->name);
        $updates->seat = $request->seat;
        $updates->price = $request->price;
        $updates->short_description = $request->short_description;
        $updates->description = $request->description;
        $updates->status = $request->status;
        $updates->update();

        return redirect()->route('rv.index')->with('message', 'R.V Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RV  $rV
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $rvs = RV::where('slug', $slug)->first();
        if ($rvs) {
            $rvs->delete();
            return true;
        } else {
            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
