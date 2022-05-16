<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\categories;
use Illuminate\Http\Request;
use Auth;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:categories-list|categories-create|categories-edit|categories-delete', ['only' => ['index','store']]);
        $this->middleware('permission:categories-create', ['only' => ['create','store']]);
        $this->middleware('permission:categories-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:categories-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = categories::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where('name', 'like', '%'. $request['search'] .'%');
            }
            if($request['status']!="All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
                $query->where('status', $request['status']);
            }
            $models = $query->paginate(1);
            return (string) view('admin.categories.search', compact('models'));
        }
        $page_title = 'All Categories';
        $models = categories::orderby('id', 'desc')->paginate(10);
        return View('admin.categories.index', compact("models","page_title"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Add Categories';
        return View('admin.categories.create', compact('page_title'));
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
            'name' => 'required|max:100',
            'description' => 'max:250',
        ]);

        $model = new categories();
        $model->created_by = Auth::user()->id;
        $model->name = $request->name;
        $model->description = $request->description;
        $model->save();

        return redirect()->route('categories.index')->with('message', 'Categories Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cetagories  $cetagories
     * @return \Illuminate\Http\Response
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cetagories  $cetagories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Categories';
        $model = categories::where('id', $id)->first();
        return View('admin.categories.edit', compact("model", "page_title"));
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

        $update = categories::where('id', $id)->first();
        $update->name = $request->name;
        $update->description = $request->description;
        $update->status = $request->status;
        $update->update();

        return redirect()->route('categories.index')->with('message', 'Categories Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cetagories  $cetagories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = categories::where('id', $id)->first();
        if ($model) {
            $model->delete();
            return true;
        } else {
            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
