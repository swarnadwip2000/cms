<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class LeadManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = Project::where('type', 2)->orderBy('id', 'desc')->get();
        $stuffs = User::role('STAFF')->where('status', 1)->orderBy('name', 'asc')->get();
        return view('admin.leads.list')->with(compact('stuffs','leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stuffs = User::role('STAFF')->where('status', 1)->orderBy('name', 'asc')->get();
        return view('admin.leads.create')->with(compact('stuffs'));
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
            'stuff_id' => 'required',
            'client_name' => 'required',
            'client_email' =>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'client_address' => 'required',
            'client_phone' => 'required',
        ]);

        $leads = new Project();
        $leads->project_id = rand(0000000,999999999);
        $leads->stuff_id = $request->stuff_id;
        $leads->client_name = $request->client_name;
        $leads->client_email = $request->client_email;
        $leads->client_address = $request->client_address;
        $leads->client_phone = $request->client_phone;
        $leads->type = 2;
        $leads->save();
        return redirect()->route('leads.index')->with('message', 'Lead added successfully.');
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
        return view('admin.leads.edit')->with(compact('stuffs', 'lead'));
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
            'stuff_id' => 'required',
            'client_name' => 'required',
            'client_email' =>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'client_address' => 'required',
            'client_phone' => 'required',
        ]);

        $leads = Project::findOrFail($id);
        $leads->stuff_id = $request->stuff_id;
        $leads->client_name = $request->client_name;
        $leads->client_email = $request->client_email;
        $leads->client_address = $request->client_address;
        $leads->client_phone = $request->client_phone;
        $leads->save();
        return redirect()->route('leads.index')->with('message', 'Lead updated successfully.');
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

    public function leads($id)
    {
        Project::where('id', $id)->delete();
        return redirect()->back()->with('error', 'Leads has been deletede');
    }

    public function leadsAssign(Request $request)
    {
        if ($request->ajax()) {
            Project::where('id', $request->lead_id)->update(['stuff_id'=> $request->stuff_id]);
            return response()->json(['status'=>true, 'message' => 'Stuff assigned successfully.']);
        }
    }
}
