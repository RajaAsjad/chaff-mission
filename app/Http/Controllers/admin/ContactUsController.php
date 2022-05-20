<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:contactus-list|contactus-create|contactus-delete', ['only' => ['index','store']]);
        $this->middleware('permission:contactus-create', ['only' => ['create','store']]);
        $this->middleware('permission:contactus-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        if($request->ajax()){
            $query = ContactUs::orderby('id' , 'desc')->where('id' , '>' , 0);
            if($request['status'] != 'All'){
                if($request['status']==2){
                    $request['status']== 0;
                }
            $query->where('status' , $request['status']);
            }
            $models= $query->paginate(10);
            return (string) view('admin.contact_us.search' , compact('models'));
        }

            $page_title= 'All Contact Us';
            $models=ContactUs::where('status' , 1)->paginate(10);
            return view('admin.contact_us.index' , compact('page_title' , 'models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'email' => 'required|max:100',
            'phone' => 'required|max:100',
            'address' => 'required|max:100',
            'message' => 'required|max:1000',

        ]);

        $model = new ContactUs();

        $model->name = $request->name;
        $model->email = $request->email;
        $model->phone = $request->phone;
        $model->address = $request->address;
        $model->message = $request->message;
        $model->save();

        return redirect()->back()->with('message', 'ContactUs Added Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = ContactUs::where('id', $id)->first();
        if ($model) {
            $model->delete();
            return true;
        } else {
            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
