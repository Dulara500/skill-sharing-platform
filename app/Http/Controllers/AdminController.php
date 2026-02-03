<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\report;

class AdminController extends Controller
{

    public function users(){
        $users = User::where('user_type','user')->get();
        return view('admin.adminLayouts.users',compact('users'));
    }
    public function dashboard(){
        $noOfReports = report::count();
        return view('admin.dashboard', compact('noOfReports'));
    }
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users');
    }
    public function reports(){
        $reports = Report::orderBy('teacher_id')->get();
        return view('admin.adminLayouts.report',compact('reports'));
    }

    public function deleteReport($course_id, $report_id){
        $course = Course::findOrfail($course_id);
        $course->delete();

        $report = Report::findOrfail($report_id);
        $report->delete();

        return redirect()->route('admin.reports');
    }

    public function viewcourse($course_id){
        $course = Course::where('id',$course_id)->first();
        return view('admin.viewcourse', compact('course'));
    }


}
