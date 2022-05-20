<?php

namespace App\Http\Controllers\admin;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function _construct()
    {
        $this->middleware('permission:contact-list|contact-create|contact-edit|contact-delete' , ['only' => ['index','store']]);
        $this->middleware('permission:contact-create' , ['only' => ['create','store']]);
        $this->middleware('permission:contact-edit' , ['only' => ['edit','update']]);
        $this->middleware('permission:contact-delete' , ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        if($request->ajax()){
            $query=Contact::orderby('id' , 'desc')->where('id' ,'>' , 0);
            if($request['search'] != ""){
                $query->where('name' , 'like' , '%' . $request['search'] .'%');
            }
            if($request['status'] != "All"){
                if($request['status']==2){
                    $request['status']==0;
                }
                $query->where('status' ,$request['status']);
            }
            $contacts=$query->paginate(10);
            return (string) view('admin.contact.search' , compact('contacts'));
        }

        $page_title= 'All Contact';
        $contacts = Contact::orderby('id' , 'desc')->paginate(10);
        return view('admin.contact.index' , compact('contacts', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title= "Add Contact";
        return view('admin.contact.create' , compact('page_title'));
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
            'name' => 'required|max:225',
            'description' => 'required|max:1000',
            'address' => 'required|max:1000',
            'telephone' => 'required|max:225',
            'fax' => 'required|max:225',
            'location' => 'required|max:1000',
        ]);

        $contacts = new Contact();
        $contacts->name = $request->name;
        $contacts->slug = \Str::slug($request->name);
        $contacts->short_description = $request->short_description;
        $contacts->description = $request->description;
        $contacts->address = $request->address;
        $contacts->telephone = $request->telephone;
        $contacts->fax = $request->fax;
        $contacts->location = $request->location;
        $contacts->save();

        return redirect()->route('contact.index')->with('message' , 'Contact added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    { 
        $page_title= "Edit Contact";
        $contact=Contact::where('slug' , $slug)->first();
        return view('admin.contact.edit' , compact('page_title' , 'contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update=Contact::where('slug' , $slug)->first();
        $validator = $request->validate([
            'name' => 'required|max:225',
            'description' => 'required|max:1000',
            'address' => 'required|max:1000',
            'telephone' => 'required|max:225',
            'fax' => 'required|max:225',
            'location' => 'required|max:1000',
        ]);

        $update->name = $request->name;
        $update->slug = \Str::slug($request->name);
        $update->short_description = $request->short_description;
        $update->description = $request->description;
        $update->address = $request->address;
        $update->telephone = $request->telephone;
        $update->fax = $request->fax;
        $update->location = $request->location;
        $update->update();

        return redirect()->route('contact.index')->with('message' , 'Contact Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $contacts=Contact::where('slug' , $slug)->first();
        if($contacts){
            $contacts->delete();
            return true;
        }
        else{
            return response()->json(['message' => 'Failed'], 404);
        }
    }
}
