<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectManagementControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where('type', 1)->orderBy('id', 'desc')->get();
        $stuffs = User::role('STAFF')->where('status', 1)->orderBy('name', 'asc')->get();
        return view('admin.projects.list')->with(compact('stuffs','projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stuffs = User::role('STAFF')->where('status', 1)->orderBy('name', 'asc')->get();
        return view('admin.projects.create')->with(compact('stuffs'));
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

        $projects = new Project();
        $projects->project_id = rand(0000000,999999999);
        $projects->stuff_id = $request->stuff_id;
        $projects->client_name = $request->client_name;
        $projects->client_email = $request->client_email;
        $projects->client_address = $request->client_address;
        $projects->client_phone = $request->client_phone;
        $projects->type = 1;
        $projects->save();
        return redirect()->route('projects.index')->with('message', 'Project added successfully.');
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
        $project = Project::findOrFail($id);
        return view('admin.projects.edit')->with(compact('stuffs', 'project'));
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

        $projects = Project::findOrFail($id);
        $projects->stuff_id = $request->stuff_id;
        $projects->client_name = $request->client_name;
        $projects->client_email = $request->client_email;
        $projects->client_address = $request->client_address;
        $projects->client_phone = $request->client_phone;
        $projects->save();
        return redirect()->route('projects.index')->with('message', 'Projects updated successfully.');
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

    public function delete($id)
    {
        Project::where('id', $id)->delete();
        return redirect()->back()->with('error', 'Project has been deleted');
    }

    public function projectsAssign(Request $request)
    {
        // return $request->all();
        if ($request->ajax()) {
            Project::where('id', $request->project_id)->update(['stuff_id'=> $request->stuff_id]);
            return response()->json(['status'=>true, 'message' => 'Stuff assigned successfully.']);
        }
    }
}
