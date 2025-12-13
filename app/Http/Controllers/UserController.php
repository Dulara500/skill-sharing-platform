<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function dash()
    {
        return view('user.userdashboard');
    }

    public function inbox()
    {
         return view('user.userinbox');
    }

    public function classes()
    {
        return view('user.classSection.teaching');
    }

    public function progress()
    {
       return view('user.progressSection.stupro');
    }

    public function reviews()
    {
        return view('user.reviewSection.stureview');
    }
    public function messages(){
        return view('user.messageSection.message');
    }
    public function notification(){
        return view('user.messageSection.notification');
    }
    public function teaching(){
        return view('user.classSection.teaching');
    }
    public function learning(){
        return view('user.classSection.learning');
    }
    public function mypro(){
        return view('user.progressSection.mypro');
    }
    public function stupro(){
        return view('user.progressSection.stupro');
    }
    public function stureview(){
        return view('user.reviewSection.stureview');
    }
    public function teareviews(){
        return view('user.reviewSection.teareviews');
    }
    public function profile(){
        return view('user.userprofile');
    }

}
