<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\skillexchange;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\User;

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
        $course = new Course();
        $course->user_id = auth()->id();
        $course->title = $request->title;
        $course->category_id = $request->category_id;
        $course->tags = $request->tags;
        $course->overview = $request->overview;
        $course->years_experience = $request->years_experience;
        $course->is_certified_teacher = $request->is_certified_teacher === 'yes';

        if ($request->hasFile('file')) {
            $filename = time().'.'.$request->file->getClientOriginalExtension();
            $request->file->move(public_path('material'), $filename);
            $course->file = $filename;
        }

          $course->save();

        return redirect()->route('teaching');
    }

    public function storeExchageSkills(Request $request){
        $request->validate([
            'teach' => 'required|string',
            'exchange' => 'required|string',
        ]);

        $skillarray = array_map(
            'trim',
            explode(',',$request->teach)
        );

        $user_id = auth()->id();
        $exchange =$request->exchange;
        skillexchange::firstOrCreate(
            [
            'user_id'  => $user_id,
            'exchange' => $exchange,
            ],
            [
            'teach'    => $skillarray,
            ]
        );
        return redirect()->route('matching');
    }

    public function matchMaking(){
        $currentUserId = Auth::id();
        $currentUserexchange = skillexchange::where('user_id',$currentUserId)->value('exchange');
        $matches = Course::where('user_id','!=',$currentUserId)
            ->where('title',$currentUserexchange)
            ->get();
        if ($matches->isNotEmpty()) {
            $matchinguser = User::where('id', $matches->first()->user_id)->value('name');
        } else {
            $matchinguser = null;
        }
        $exchange = Course::where('user_id',$currentUserId)->value('title');
        return view('user.matchmaking',compact('matches','currentUserexchange','matchinguser','exchange'));
    }






}
