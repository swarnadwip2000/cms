<?php

namespace App\Http\Controllers\Stuff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LeadManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = Project::where(['type'=> 2, 'stuff_id' => Auth::user()->id])->orderBy('id', 'desc')->get();
        return view('stuff.leads.list')->with(compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stuff.leads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'client_email' =>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'client_address' => 'required',
            'client_phone' => 'required',
        ]);

        $leads = new Project();
        $leads->project_id = rand(0000000,999999999);
        $leads->stuff_id = Auth::user()->id;
        $leads->client_name = $request->client_name;
        $leads->client_email = $request->client_email;
        $leads->client_address = $request->client_address;
        $leads->client_phone = $request->client_phone;
        $leads->type = 2;
        $leads->save();
        return redirect()->route('stuff-leads.index')->with('message', 'Lead added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stuffs = User::role('STAFF')->where('status', 1)->orderBy('name', 'asc')->get();
        $lead = Project::findOrFail($id);
        return view('stuff.leads.edit')->with(compact('stuffs', 'lead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'client_name' => 'required',
            'client_email' =>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'client_address' => 'required',
            'client_phone' => 'required',
        ]);

        $leads = Project::findOrFail($id);
        $leads->stuff_id = Auth::user()->id;
        $leads->client_name = $request->client_name;
        $leads->client_email = $request->client_email;
        $leads->client_address = $request->client_address;
        $leads->client_phone = $request->client_phone;
        $leads->save();
        return redirect()->route('stuff-leads.index')->with('message', 'Lead updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




    public function assignToProject($id)
    {
        Project::where('id', $id)->update(['type'=>1]);
        return redirect()->route('stuff-projects.index')->with('message', 'Leads has been assigned as a project.');
    }
}
