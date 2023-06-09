<?php

namespace App\Http\Controllers\admin;
use App\Models\ParagonLogistic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParagonLogisticController extends Controller
{

    function _construct()
    {
        $this->middleware('permission:paragon-list|paragon-create|paragon-edit|paragon-delete' , ['only' => ['index','store']]);
        $this->middleware('permission:paragon-create' , ['only' => ['create','store']]);
        $this->middleware('permission:paragon-edit' , ['only' => ['edit','update']]);
        $this->middleware('permission:paragon-delete' , ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query=ParagonLogistic::orderby('id' , 'desc')->where('id' ,'>' , 0);
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
            $paragon_logistics=$query->paginate(10);
            return (string) view('admin.paragon_logistic.search' , compact('paragon_logistics'));
        }

        $page_title= 'All Paragon Logistics';
        $paragon_logistics = ParagonLogistic::orderby('id' , 'desc')->paginate(10);
        return view('admin.paragon_logistic.index' , compact('paragon_logistics', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title= "Add Paragon Logistics";
        return view('admin.paragon_logistic.create' , compact('page_title'));
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
            'B_L_no' => 'required|max:100',
            'shipper' => 'required|max:100',
            'consignee' => 'required|max:100',
        ]);

        $model = new ParagonLogistic();

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
        $model->final_destination = $request->final_destination;
        $model->container_no = $request->container_no;
        $model->seal_no = $request->seal_no;
        $model->marks = $request->marks;
        $model->numbers = $request->numbers;
        $model->container_or_pkg = $request->container_or_pkg;
        $model->gross_weight = $request->gross_weight;
        $model->measurments = $request->measurments;
        $model->kind_of_pkg = $request->kind_of_pkg;
        $model->desc_of_good = $request->desc_of_good;
        $model->total_container_or_pkg = $request->total_container_or_pkg;
        $model->merchant_declared_value = $request->merchant_declared_value;
        $model->freight_charges = $request->freight_charges;
        $model->revenue_tons = $request->revenue_tons;
        $model->rate = $request->rate;
        $model->per = $request->per;
        $model->prepaid = $request->prepaid;
        $model->collect = $request->collect;
        $model->exchange_rate = $request->exchange_rate;
        $model->prepaid_2 = $request->prepaid_2;
        $model->payable_at = $request->payable_at;
        $model->total_prepaid_local_currency = $request->total_prepaid_local_currency;
        $model->no_of_orignal_B_L = $request->no_of_orignal_B_L;
        $model->place_of_issue = $request->place_of_issue;
        $model->date_of_issue = date('m-d-Y', strtotime($request->date_of_issue));
        $model->as_carrier = $request->as_carrier;
        $model->freight_prepaid = $request->freight_prepaid;
        $model->save();
        return redirect()->back()->with('message', 'Data has Successfully addedd !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParagonLogistic  $paragonLogistic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Veiw All Data';
        $paragons = ParagonLogistic::where('id', $id)->first();
        return view('admin.paragon_logistic.show', compact('paragons','page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParagonLogistic  $paragonLogistic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title= "Edit Paragon Logistic";
        $paragons=ParagonLogistic::where('id' , $id)->first();
        return view('admin.paragon_logistic.edit' , compact('page_title' , 'paragons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParagonLogistic  $paragonLogistic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updates = ParagonLogistic::where('id', $id)->first();
        $validator = $request->validate([
            'B_L_no' => 'required|max:100',
            'shipper' => 'required|max:100',
            'consignee' => 'required|max:100',
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
        $updates->final_destination = $request->final_destination;
        $updates->container_no = $request->container_no;
        $updates->seal_no = $request->seal_no;
        $updates->marks = $request->marks;
        $updates->numbers = $request->numbers;
        $updates->container_or_pkg = $request->container_or_pkg;
        $updates->gross_weight = $request->gross_weight;
        $updates->measurments = $request->measurments;
        $updates->kind_of_pkg = $request->kind_of_pkg;
        $updates->desc_of_good = $request->desc_of_good;
        $updates->total_container_or_pkg = $request->total_container_or_pkg;
        $updates->merchant_declared_value = $request->merchant_declared_value;
        $updates->freight_charges = $request->freight_charges;
        $updates->revenue_tons = $request->revenue_tons;
        $updates->rate = $request->rate;
        $updates->per = $request->per;
        $updates->prepaid = $request->prepaid;
        $updates->collect = $request->collect;
        $updates->exchange_rate = $request->exchange_rate;
        $updates->prepaid_2 = $request->prepaid_2;
        $updates->payable_at = $request->payable_at;
        $updates->total_prepaid_local_currency = $request->total_prepaid_local_currency;
        $updates->no_of_orignal_B_L = $request->no_of_orignal_B_L;
        $updates->place_of_issue = $request->place_of_issue;
        $updates->date_of_issue = date('m-d-Y', strtotime($request->date_of_issue));
        $updates->as_carrier = $request->as_carrier;
        $updates->freight_prepaid = $request->freight_prepaid;
        $updates->status = $request->status;
        $updates->update();

        return redirect()->route('paragon.index')->with('message' , 'Your Data Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParagonLogistic  $paragonLogistic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paragon_logistics=ParagonLogistic::where('id' , $id)->first();
        if($paragon_logistics){
            $paragon_logistics->delete();
            return true;
        }
        else{
            return response()->json(['message' => 'Failed'], 404);
        }
    }
}
