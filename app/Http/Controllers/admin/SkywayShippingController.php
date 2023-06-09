<?php

namespace App\Http\Controllers\admin;

use App\Models\SkywayShipping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkywayShippingController extends Controller
{


    function _construct()
    {
        $this->middleware('permission:skyway-list|skyway-create|skyway-edit|skyway-delete' , ['only' => ['index','store']]);
        $this->middleware('permission:skyway-create' , ['only' => ['create','store']]);
        $this->middleware('permission:skyway-edit' , ['only' => ['edit','update']]);
        $this->middleware('permission:skyway-delete' , ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query=SkywayShipping::orderby('id' , 'desc')->where('id' ,'>' , 0);
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
            $skyway_shippings=$query->paginate(10);
            return (string) view('admin.skyway_shipping.search' , compact('skyway_shippings'));
        }

        $page_title= 'All Skyway Shipping';
        $skyway_shippings = SkywayShipping::orderby('id' , 'desc')->paginate(10);
        return view('admin.skyway_shipping.index' , compact('skyway_shippings', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title= "Add Skyway Shipping";
        return view('admin.skyway_shipping.create' , compact('page_title'));
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

        $model = new SkywayShipping();
        $model->shipper = $request->shipper;
        $model->consignee = $request->consignee;
        $model->notify_party = $request->notify_party;
        $model->notify_party_2 = $request->notify_party_2;
        $model->pre_carriage_by = $request->pre_carriage_by;
        $model->place_of_recpt = $request->place_of_recpt;
        $model->vessel = $request->vessel;
        $model->voy_no = $request->voy_no;
        $model->B_L_no = $request->B_L_no;
        $model->port_of_loading = $request->port_of_loading;
        $model->port_of_discharge = $request->port_of_discharge;
        $model->place_of_delivery = $request->place_of_delivery;
        $model->container_no = $request->container_no;
        $model->seal_no = $request->seal_no;
        $model->marks = $request->marks;
        $model->numbers = $request->numbers;
        $model->number_of_pkg = $request->number_of_pkg;
        $model->desc_of_good = $request->desc_of_good;
        $model->gross_weight = $request->gross_weight;
        $model->measurments = $request->measurments;
        $model->kind_of_pkg = $request->kind_of_pkg;
        $model->no_of_orignal_B_L = $request->no_of_orignal_B_L;
        $model->place_of_issue = $request->place_of_issue;
        $model->date_of_issue = date('m-d-Y', strtotime($request->date_of_issue));
        $model->carrier_receipt = $request->carrier_receipt;
        $model->signed_carrier = $request->signed_carrier;
        $model->freight_prepaid = $request->freight_prepaid;
        $model->save();
        return redirect()->back()->with('message', 'Data has Successfully addedd !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkywayShipping  $skywayShipping
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Veiw All Data';
        $skyway = SkywayShipping::where('id', $id)->first();
        return view('admin.skyway_shipping.show', compact('skyway','page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkywayShipping  $skywayShipping
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title= "Edit Skyway Shipping";
        $skyway=SkywayShipping::where('id' , $id)->first();
        return view('admin.skyway_shipping.edit' , compact('page_title' , 'skyway'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkywayShipping  $skywayShipping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updates = SkywayShipping::where('id', $id)->first();
        $validator = $request->validate([
            'shipper' => 'required|max:100',
            'consignee' => 'required|max:100',
            'B_L_no' => 'required|max:100',
        ]);

        $updates->shipper = $request->shipper;
        $updates->consignee = $request->consignee;
        $updates->notify_party = $request->notify_party;
        $updates->notify_party_2 = $request->notify_party_2;
        $updates->pre_carriage_by = $request->pre_carriage_by;
        $updates->place_of_recpt = $request->place_of_recpt;
        $updates->vessel = $request->vessel;
        $updates->voy_no = $request->voy_no;
        $updates->B_L_no = $request->B_L_no;
        $updates->port_of_loading = $request->port_of_loading;
        $updates->port_of_discharge = $request->port_of_discharge;
        $updates->place_of_delivery = $request->place_of_delivery;
        $updates->container_no = $request->container_no;
        $updates->seal_no = $request->seal_no;
        $updates->marks = $request->marks;
        $updates->numbers = $request->numbers;
        $updates->number_of_pkg = $request->number_of_pkg;
        $updates->desc_of_good = $request->desc_of_good;
        $updates->gross_weight = $request->gross_weight;
        $updates->measurments = $request->measurments;
        $updates->kind_of_pkg = $request->kind_of_pkg;
        $updates->no_of_orignal_B_L = $request->no_of_orignal_B_L;
        $updates->place_of_issue = $request->place_of_issue;
        $updates->date_of_issue = date('m-d-Y', strtotime($request->date_of_issue));
        $updates->carrier_receipt = $request->carrier_receipt;
        $updates->signed_carrier = $request->signed_carrier;
        $updates->freight_prepaid = $request->freight_prepaid;
        $updates->status = $request->status;
        $updates->update();

        return redirect()->route('skyway.index')->with('message' , 'Your Data Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkywayShipping  $skywayShipping
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skyway_shippings=SkywayShipping::where('id' , $id)->first();
        if($skyway_shippings){
            $skyway_shippings->delete();
            return true;
        }
        else{
            return response()->json(['message' => 'Failed'], 404);
        }
    }
}
