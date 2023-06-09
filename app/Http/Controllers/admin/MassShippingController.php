<?php

namespace App\Http\Controllers\admin;

use App\Models\MassShipping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MassShippingController extends Controller
{


    function _construct()
    {
        $this->middleware('permission:mass-list|mass-create|mass-edit|mass-delete' , ['only' => ['index','store']]);
        $this->middleware('permission:mass-create' , ['only' => ['create','store']]);
        $this->middleware('permission:mass-edit' , ['only' => ['edit','update']]);
        $this->middleware('permission:mass-delete' , ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query=MassShipping::orderby('id' , 'desc')->where('id' ,'>' , 0);
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
            $mass_shipping=$query->paginate(10);
            return (string) view('admin.mass_shipping.search' , compact('mass_shipping'));
        }

        $page_title= 'All Mass Shipping';
        $mass_shipping = MassShipping::orderby('id' , 'desc')->paginate(10);
        return view('admin.mass_shipping.index' , compact('mass_shipping', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title= "Add Mass Shipping";
        return view('admin.mass_shipping.create' , compact('page_title'));
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

        $model = new MassShipping();
        $model->shipper = $request->shipper;
        $model->consignee = $request->consignee;
        $model->notify_party = $request->notify_party;
        $model->notify_party_2 = $request->notify_party_2;
        $model->delivery_agent = $request->delivery_agent;
        $model->vessel = $request->vessel;
        $model->place_of_recpt = $request->place_of_recpt;
        $model->port_of_loading = $request->port_of_loading;
        $model->B_L_no = $request->B_L_no;
        $model->port_of_discharge = $request->port_of_discharge;
        $model->place_of_delivery = $request->place_of_delivery;
        $model->numbers = $request->numbers;
        $model->number_of_pkg = $request->number_of_pkg;
        $model->desc_of_good = $request->desc_of_good;
        $model->gross_weight = $request->gross_weight;
        $model->measurments = $request->measurments;
        $model->total_container_or_pkg = $request->total_container_or_pkg;
        $model->temp_cont_isnt = $request->temp_cont_isnt;
        $model->shipped_board_date = date('m-d-Y', strtotime($request->shipped_board_date));
        $model->no_of_orignal_B_L = $request->no_of_orignal_B_L;
        $model->payment_term = $request->payment_term;
        $model->date_of_issue = date('m-d-Y', strtotime($request->date_of_issue));
        $model->place_of_issue = $request->place_of_issue;
        $model->total_amount = $request->total_amount;
        $model->signed_carrier = $request->signed_carrier;
        $model->save();
        return redirect()->back()->with('message', 'Data has Successfully addedd !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MassShipping  $massShipping
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Veiw All Data';
        $mass = MassShipping::where('id', $id)->first();
        return view('admin.mass_shipping.show', compact('mass','page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MassShipping  $massShipping
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title= "Edit Mass Shipping";
        $mass=MassShipping::where('id' , $id)->first();
        return view('admin.mass_shipping.edit' , compact('page_title' , 'mass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MassShipping  $massShipping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updates = MassShipping::where('id', $id)->first();
        $validator = $request->validate([
            'B_L_no' => 'required|max:100',
            'shipper' => 'required|max:100',
            'consignee' => 'required|max:100',
        ]);

        $updates->shipper = $request->shipper;
        $updates->consignee = $request->consignee;
        $updates->notify_party = $request->notify_party;
        $updates->notify_party_2 = $request->notify_party_2;
        $updates->delivery_agent = $request->delivery_agent;
        $updates->vessel = $request->vessel;
        $updates->place_of_recpt = $request->place_of_recpt;
        $updates->port_of_loading = $request->port_of_loading;
        $updates->B_L_no = $request->B_L_no;
        $updates->port_of_discharge = $request->port_of_discharge;
        $updates->place_of_delivery = $request->place_of_delivery;
        $updates->numbers = $request->numbers;
        $updates->number_of_pkg = $request->number_of_pkg;
        $updates->desc_of_good = $request->desc_of_good;
        $updates->gross_weight = $request->gross_weight;
        $updates->measurments = $request->measurments;
        $updates->total_container_or_pkg = $request->total_container_or_pkg;
        $updates->temp_cont_isnt = $request->temp_cont_isnt;
        $updates->shipped_board_date = date('m-d-Y', strtotime($request->shipped_board_date));
        $updates->no_of_orignal_B_L = $request->no_of_orignal_B_L;
        $updates->payment_term = $request->payment_term;
        $updates->date_of_issue = date('m-d-Y', strtotime($request->date_of_issue));
        $updates->place_of_issue = $request->place_of_issue;
        $updates->total_amount = $request->total_amount;
        $updates->signed_carrier = $request->signed_carrier;
        $updates->status = $request->status;
        $updates->update();

        return redirect()->route('mass.index')->with('message' , 'Your Data Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MassShipping  $massShipping
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mass_shipping=MassShipping::where('id' , $id)->first();
        if($mass_shipping){
            $mass_shipping->delete();
            return true;
        }
        else{
            return response()->json(['message' => 'Failed'], 404);
        }
    }
}
