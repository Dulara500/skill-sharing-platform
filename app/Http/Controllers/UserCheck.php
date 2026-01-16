<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;

class UserCheck extends Controller
{
    public function index(){
        if(Auth::check() && Auth::user()->user_type=='admin'){
            return view('admin.dashboard',[AdminController::class,"index"]);
        }else if(Auth::check() && Auth::user()->user_type=="user"){
            return view('dashboard');
        }
    }
}
