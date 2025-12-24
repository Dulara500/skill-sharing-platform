<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use Illuminate\Http\Request;
use App\Models\Category;

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
    public function createclass(){
        return view('user.classSection.createclass');
    }

    public function storeClass(Request $request){
        $request->validate([
        'title' => 'required|string|max:255',
        'category_id' => 'required|integer|min:1|max:6',
        'tags' => 'nullable|string|max:255',
        'overview' => 'nullable|string',
        'years_experience' => 'nullable|integer|min:0|max:50',
        'is_certified_teacher' => 'required|in:yes,no',
        'file' => 'nullable|file|max:10240',
    ]);

    $classes = new Classes();
    $classes->user_id = auth()->id();
    $classes->title = $request->title;
    $classes->category_id = $request->category_id;
    $classes->tags = $request->tags;
    $classes->overview = $request->overview;
    $classes->years_experience = $request->years_experience;
    $classes->is_certified_teacher = $request->is_certified_teacher === 'yes';

    if ($request->hasFile('file')) {
        $filename = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('material'), $filename);
        $classes->file = $filename;
    }

    $classes->save();

    return redirect()->route('teaching');
    }


}
