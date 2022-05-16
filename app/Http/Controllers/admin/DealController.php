<?php

namespace App\Http\Controllers\admin;

use App\Models\Deal;
use App\Models\categories;
use App\Models\Rental;
use App\Models\Property;
use App\Models\RV;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct(){
        $this->middleware('permission:deals-list|deals-create|deals-edit|deals-delete' , ['only' => ['index','store']]);
        $this->middleware('permission:deals-create' , ['only' => ['create','store']]);
        $this->middleware('permission:deals-edit' , ['only' => ['edit','update']]);
        $this->middleware('permission:deals-delete' , ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        if($request->ajax()){
            $query=Deal::orderby('id' , 'desc')->where('id' , '>' , 0);
            if($request['search'] != ""){
                $query->where('deal_name' , 'like' , '%' . $request['search'] .'%');
            }
            if($request['status'] != 'All'){
                if($request['status']==2){
                    $request['status'] = 0;
                }
                $query->where('status' , $request['status']);
            }
            $deals=$query->paginate(10);
            return (string) view('admin.deals.search' , compact('deals'));
        }

        $page_title='All Deals';
        $deals=Deal::orderby('id' , 'desc')->paginate(10);
        return view('admin.deals.index' , compact('deals' , 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title='Add Deals';
        $categories=categories::where('status' , 1)->get();
        return view('admin.deals.create' , compact('page_title' , 'categories'));
    }

    public function getproducts(Request $request){
        $category=categories::where('id' , $request->category)->first();
        if($category->name == 'Properties'){
                $properties=Property::where('status' , 1)->get();
                return response()->json($properties);
        }
        elseif($category->name == 'Rentals'){
            $rentals=Rental::where('status' , 1)->get();
                return response()->json($rentals);
        }
        elseif($category->name == 'R.V'){
            $rvs=RV::where('status' , 1)->get();
            return response()->json($rvs);
        }
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
            'deal_name' => 'required',
            'price' => 'required',
        ]);

        $deals= new Deal();

        
        $deals->created_by = Auth::user()->id;
        $deals->deal_name = $request->deal_name;
        $deals->category = $request->category;
        $deals->deal_product = $request->deal_product;
        $deals->price = $request->price;
        $deals->start_date = $request->start_date;
        $deals->end_date = $request->end_date;
        $deals->save();

        return redirect()->route('deals.index')->with('message' , 'Deal Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function show(Deal $deals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deal  $deals
     * @return \Illuminate\Http\Response
     */
    public function edit($id ,Request $request)
    {
        $page_title = 'Edit Deal';
        $deals=Deal::where('id' , $id)->first();
        $categories=categories::where('id' , $product->category)->get();
        $products = '';
        if($products->name == 'Properties'){
            $properties=Property::where('status' , 1)->get();
        }
        elseif($products->name == 'Rentals'){
            $rentals=Rental::where('status' , 1)->get();
        }
        elseif($products->name == 'R.V'){
            $rvs=RV::where('status' , 1)->get();
        }
        return view('admin.deals.edit' , compact('categories' , 'page_title' , 'deals' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validator = $request->validate([
        //     'deal_name' => 'required',
        //     'price' => 'required',
        // ]);

        $update=Deal::where('id' , $id)->get();

        
        $update->created_by = Auth::user()->id;
        $update->deal_name = $request->deal_name;
        $update->category = $request->category;
        $update->deal_product = $request->deal_product;
        $update->price = $request->price;
        $update->start_date = $request->start_date;
        $update->end_date = $request->end_date;
        $update->update();

        return redirect()->route('deals.index')->with('message' , 'Deal Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deals= Deal::where('id' , $id)->first();
        if($deals){
            $deals->delete();
            return true;
        }else{
            return response()->json(['message' => 'Failed'],404);
        }
    }
}
