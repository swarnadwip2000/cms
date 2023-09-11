<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count['user'] = User::Role('USER')->count();
        $count['stuff'] = User::Role('STAFF')->count();
        $count['lead'] = Project::where('type', 2)->count();

        return view('admin.dashboard')->with(compact('count'));
    }

}
