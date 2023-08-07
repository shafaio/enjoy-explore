<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public static function index(){
        return view('dashboard/user/index',[
            "title" => "Dashboard"
        ]);
    }
    
}
