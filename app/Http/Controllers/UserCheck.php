<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Models\Learning;
use App\Models\Course;
use App\Models\report;

class UserCheck extends Controller
{
    public function index(){
        if(Auth::check() && Auth::user()->user_type=='admin'){
            $noOfReports = report::count();
            return view('admin.dashboard',[AdminController::class,"index"], compact('noOfReports'));
        }else if(Auth::check() && Auth::user()->user_type=="user"){
            $currentUserId = Auth::id();
            $classesTeaching = Course::where('user_id',$currentUserId)->count();
            $noOfLessons  = Learning::where('user_id',$currentUserId)
                            ->where('is_completed', false)
                            ->count();
            $completedLessons  = Learning::where('user_id',$currentUserId)
                            ->where('is_completed', true)
                            ->count();
            return view('dashboard', compact('noOfLessons','classesTeaching','completedLessons'));
        }
    }
}
