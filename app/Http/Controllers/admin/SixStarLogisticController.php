<?php

namespace App\Http\Controllers\admin;

use App\Models\SixStarLogistic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SixStarLogisticController extends Controller
{


    function _construct()
    {
        $this->middleware('permission:six_star-list|six_star-create|six_star-edit|six_star-delete' , ['only' => ['index','store']]);
        $this->middleware('permission:six_star-create' , ['only' => ['create','store']]);
        $this->middleware('permission:six_star-edit' , ['only' => ['edit','update']]);
        $this->middleware('permission:six_star-delete' , ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query=SixStarLogistic::orderby('id' , 'desc')->where('id' ,'>' , 0);
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
            $sixStars=$query->paginate(10);
            return (string) view('admin.six_star_logistics.search' , compact('sixStars'));
        }

        $page_title= 'All Six Star Logistics';
        $sixStars = SixStarLogistic::orderby('id' , 'desc')->paginate(10);
        return view('admin.six_star_logistics.index' , compact('sixStars', 'page_title'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title= "Add Six Star Logistics";
        return view('admin.six_star_logistics.create' , compact('page_title'));
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
            'num_of_BL' => 'required|max:100',

        ]);

        $model = new SixStarLogistic();
        $model->shipper = $request->shipper;
        $model->consignee = $request->consignee;
        $model->notify_party = $request->notify_party;
        $model->notify_party_2 = $request->notify_party_2;
        $model->delivery_agent = $request->delivery_agent;
        $model->pre_carriage_by = $request->pre_carriage_by;
        $model->place_of_recpt = $request->place_of_recpt;
        $model->freight = $request->freight;
        $model->BL_status = $request->BL_status;
        $model->num_of_BL = $request->num_of_BL;
        $model->bill_of_landing_no = $request->bill_of_landing_no;
        $model->vessel = $request->vessel;
        $model->voyage = $request->voyage;
        $model->port_of_loading = $request->port_of_loading;
        $model->port_of_discharge = $request->port_of_discharge;
        $model->place_of_delivery = $request->place_of_delivery;
        $model->date_of_issue = date('m-d-Y', strtotime($request->date_of_issue));
        $model->marks = $request->marks;
        $model->kind_of_pkg = $request->kind_of_pkg;
        $model->desc_of_good = $request->desc_of_good;
        $model->gross_weight = $request->gross_weight;
        $model->measurments = $request->measurments;
        $model->save();
        return redirect()->back()->with('message', 'Data has Successfully addedd !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SixStarLogistic  $sixStarLogistic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Veiw All Data';
        $sixStar = SixStarLogistic::where('id', $id)->first();
        return view('admin.six_star_logistics.show', compact('sixStar','page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SixStarLogistic  $sixStarLogistic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title= "Edit Six Star Logistics";
        $sixStar=SixStarLogistic::where('id' , $id)->first();
        return view('admin.six_star_logistics.edit' , compact('page_title' , 'sixStar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SixStarLogistic  $sixStarLogistic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updates = SixStarLogistic::where('id', $id)->first();
        $validator = $request->validate([
            'shipper' => 'required|max:100',
            'consignee' => 'required|max:100',
            'num_of_BL' => 'required|max:100',
        ]);

        $updates->shipper = $request->shipper;
        $updates->consignee = $request->consignee;
        $updates->notify_party = $request->notify_party;
        $updates->notify_party_2 = $request->notify_party_2;
        $updates->delivery_agent = $request->delivery_agent;
        $updates->pre_carriage_by = $request->pre_carriage_by;
        $updates->place_of_recpt = $request->place_of_recpt;
        $updates->freight = $request->freight;
        $updates->BL_status = $request->BL_status;
        $updates->num_of_BL = $request->num_of_BL;
        $updates->bill_of_landing_no = $request->bill_of_landing_no;
        $updates->vessel = $request->vessel;
        $updates->voyage = $request->voyage;
        $updates->port_of_loading = $request->port_of_loading;
        $updates->port_of_discharge = $request->port_of_discharge;
        $updates->place_of_delivery = $request->place_of_delivery;
        $updates->date_of_issue = date('m-d-Y', strtotime($request->date_of_issue));
        $updates->marks = $request->marks;
        $updates->kind_of_pkg = $request->kind_of_pkg;
        $updates->desc_of_good = $request->desc_of_good;
        $updates->gross_weight = $request->gross_weight;
        $updates->measurments = $request->measurments;
        $updates->status = $request->status;
        $updates->update();

        return redirect()->route('six_star.index')->with('message' , 'Your Data Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SixStarLogistic  $sixStarLogistic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sixStars=SixStarLogistic::where('id' , $id)->first();
        if($sixStars){
            $sixStars->delete();
            return true;
        }
        else{
            return response()->json(['message' => 'Failed'], 404);
        }
    }
}
