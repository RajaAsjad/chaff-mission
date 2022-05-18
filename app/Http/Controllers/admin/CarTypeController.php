<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CarType;
use Illuminate\Http\Request;
use Auth;

class CarTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:car_type-list|car_type-create|car_type-edit|car_type-delete', ['only' => ['index','store']]);
        $this->middleware('permission:car_type-create', ['only' => ['create','store']]);
        $this->middleware('permission:car_type-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:car_type-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = CarType::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where('name', 'like', '%'. $request['search'] .'%');
            }
            if($request['status']!="All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
                $query->where('status', $request['status']);
            }
            $models = $query->paginate(10);
            return (string) view('admin.car_type.search', compact('models'));
        }
        $page_title = 'All Car Types';
        $models = CarType::orderby('id', 'desc')->paginate(10);
        return View('admin.car_type.index', compact("models","page_title"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Add Car Type';
        return View('admin.car_type.create', compact('page_title'));
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
            'name' => 'required|unique:car_types,name|max:255',
            'description' => 'max:250',
        ]);

        $model = new CarType();
        $model->created_by = Auth::user()->id;
        $model->name = $request->name;
        $model->slug = \Str::slug($request->name);
        $model->description = $request->description;
        $model->save();

        return redirect()->route('car_type.index')->with('message', 'Car Type Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car_type  $cetagories
     * @return \Illuminate\Http\Response
     */
    public function show(Car_type $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car_type  $cetagories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Car Type';
        $model = CarType::where('id', $id)->first();
        return View('admin.car_type.edit', compact("model", "page_title"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cetagories  $cetagories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'name' => 'required|max:100',
            'description' => 'max:250',
        ]);

        $update = CarType::where('id', $id)->first();
        $update->name = $request->name;
        $model->slug = \Str::slug($request->name);
        $update->description = $request->description;
        $update->status = $request->status;
        $update->update();

        return redirect()->route('car_type.index')->with('message', 'Car Type Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car_type  $cetagories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = CarType::where('id', $id)->delete();
        if ($model) {
            return true;
        } else {
            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
