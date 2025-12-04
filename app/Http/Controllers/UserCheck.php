<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCheck extends Controller
{
    public function index(){
        if(Auth::check() && Auth::user()->user_type=='admin'){
            return view('admin.adminpanel');
        }else if(Auth::check() && Auth::user()->user_type=="user"){
            return view('user.userdashboard');
        }
    }
}
