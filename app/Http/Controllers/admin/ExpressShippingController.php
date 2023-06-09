<?php

namespace App\Http\Controllers\admin;
use App\Models\ExpressShipping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpressShippingController extends Controller
{


    function _construct()
    {
        $this->middleware('permission:express-list|express-create|express-edit|express-delete' , ['only' => ['index','store']]);
        $this->middleware('permission:express-create' , ['only' => ['create','store']]);
        $this->middleware('permission:express-edit' , ['only' => ['edit','update']]);
        $this->middleware('permission:express-delete' , ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query=ExpressShipping::orderby('id' , 'desc')->where('id' ,'>' , 0);
            if($request['search'] != ""){
                $query->where('shipper', 'like', '%'. $request['search'] .'%')
                    ->orWhere('B_L_no', 'like', '%'. $request['search'].'%')
                    ->orWhere('consignee', 'like', '%'. $request['search'].'%')
                    ->orWhere('status', 'like', '%'. $request['search'].'%');
            }
            if($request['status'] != "All"){
                if($request['status']==1){
                    $request['status']==0;
                }
                $query->where('status' ,$request['status']);
            }
            $express_shippings=$query->paginate(10);
            return (string) view('admin.express_shipping.search' , compact('express_shippings'));
        }

        $page_title= 'All Express Shipping';
        $express_shippings = ExpressShipping::orderby('id' , 'desc')->paginate(10);
        return view('admin.express_shipping.index' , compact('express_shippings', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title= "Add Express Shipping";
        return view('admin.express_shipping.create' , compact('page_title'));
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
            'shipper' => 'required|max:100',
            'consignee' => 'required|max:100',
            'B_L_no' => 'required|max:100',
        ]);

        $model = new ExpressShipping();
        $model->shipper = $request->shipper;
        $model->consignee = $request->consignee;
        $model->notify_party = $request->notify_party;
        $model->notify_party_2 = $request->notify_party_2;
        $model->place_of_recpt = $request->place_of_recpt;
        $model->port_of_loading = $request->port_of_loading;
        $model->vessel = $request->vessel;
        $model->voy_no = $request->voy_no;
        $model->place_of_delivery = $request->place_of_delivery;
        $model->item_no = $request->item_no;
        $model->container_no = $request->container_no;
        $model->seal_no = $request->seal_no;
        $model->marks = $request->marks;
        $model->numbers = $request->numbers;
        $model->number_of_pkg = $request->number_of_pkg;
        $model->desc_of_good = $request->desc_of_good;
        $model->gross_weight = $request->gross_weight;
        $model->measurments = $request->measurments;
        $model->total_no_of_pkg = $request->total_no_of_pkg;
        $model->shipped_board_date = date('m-d-Y', strtotime($request->shipped_board_date));
        $model->place_of_issue = $request->place_of_issue;
        $model->date_of_issue = date('m-d-Y', strtotime($request->date_of_issue));
        $model->B_L_no = $request->B_L_no;
        $model->freight_prepaid = $request->freight_prepaid;
        $model->place_of_recpt_2 = $request->place_of_recpt_2;
        $model->carrier = $request->carrier;
        $model->save();
        return redirect()->back()->with('message', 'Data has Successfully addedd !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpressShipping  $expressShipping
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Veiw All Data';
        $express = ExpressShipping::where('id', $id)->first();
        return view('admin.express_shipping.show', compact('express','page_title'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpressShipping  $expressShipping
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title= "Edit Express Shipping";
        $express=ExpressShipping::where('id' , $id)->first();
        return view('admin.express_shipping.edit' , compact('page_title' , 'express'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpressShipping  $expressShipping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updates = ExpressShipping::where('id', $id)->first();
        $validator = $request->validate([
            'B_L_no' => 'required|max:100',
            'shipper' => 'required|max:100',
            'consignee' => 'required|max:100',
        ]);
        $updates->shipper = $request->shipper;
        $updates->consignee = $request->consignee;
        $updates->notify_party = $request->notify_party;
        $updates->notify_party_2 = $request->notify_party_2;
        $updates->place_of_recpt = $request->place_of_recpt;
        $updates->port_of_loading = $request->port_of_loading;
        $updates->vessel = $request->vessel;
        $updates->voy_no = $request->voy_no;
        $updates->place_of_delivery = $request->place_of_delivery;
        $updates->item_no = $request->item_no;
        $updates->container_no = $request->container_no;
        $updates->seal_no = $request->seal_no;
        $updates->marks = $request->marks;
        $updates->numbers = $request->numbers;
        $updates->number_of_pkg = $request->number_of_pkg;
        $updates->desc_of_good = $request->desc_of_good;
        $updates->gross_weight = $request->gross_weight;
        $updates->measurments = $request->measurments;
        $updates->total_no_of_pkg = $request->total_no_of_pkg;
        $updates->shipped_board_date = date('m-d-Y', strtotime($request->shipped_board_date));
        $updates->place_of_issue = $request->place_of_issue;
        $updates->date_of_issue = date('m-d-Y', strtotime($request->date_of_issue));
        $updates->B_L_no = $request->B_L_no;
        $updates->freight_prepaid = $request->freight_prepaid;
        $updates->place_of_recpt_2 = $request->place_of_recpt_2;
        $updates->carrier = $request->carrier;
        $updates->status = $request->status;
        $updates->update();

        return redirect()->route('express.index')->with('message' , 'Your Data Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpressShipping  $expressShipping
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $express_shippings=ExpressShipping::where('id' , $id)->first();
        if($express_shippings){
            $express_shippings->delete();
            return true;
        }
        else{
            return response()->json(['message' => 'Failed'], 404);
        }
    }
}
