<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.userdashboard');
    }

    public function inbox()
    {
         return view('user.userinbox');
    }

    public function classes()
    {
        return view('user.userclasses');
    }

    public function progress()
    {
       return view('user.userprogress');
    }

    public function reviews()
    {
        return view('user.userreview');
    }
}
