<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class AdminController extends Controller
{

    public function users(){
        $users = User::where('user_type','user')->get();
        return view('admin.adminLayouts.users',compact('users'));
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users');
    }



}
