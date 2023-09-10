<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count['user'] = User::Role('USER')->count();
        $count['stuff'] = User::Role('STAFF')->count();

        return view('admin.dashboard')->with(compact('count'));
    }

}
