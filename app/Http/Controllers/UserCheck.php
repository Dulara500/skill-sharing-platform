<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Models\Learning;
use App\Models\Course;

class UserCheck extends Controller
{
    public function index(){
        if(Auth::check() && Auth::user()->user_type=='admin'){
            return view('admin.dashboard',[AdminController::class,"index"]);
        }else if(Auth::check() && Auth::user()->user_type=="user"){
            $currentUserId = Auth::id();
            $classesTeaching = Course::where('user_id',$currentUserId)->count();
            $noOfLessons  = Learning::where('user_id',$currentUserId)->count();
            return view('dashboard', compact('noOfLessons','classesTeaching'));
        }
    }
}
