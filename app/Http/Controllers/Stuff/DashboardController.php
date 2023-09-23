<?php

namespace App\Http\Controllers\Stuff;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $count['lead'] = Project::where(['type'=> 2, 'stuff_id' => Auth::user()->id])->count();
        $count['projects'] = Project::where(['type'=> 1, 'stuff_id' => Auth::user()->id])->count();
        return view('stuff.dashboard')->with(compact('count'));
    }
}
