<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\skillexchange;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\User;
use App\Models\Learning;
use App\Models\stu_review;

class UserController extends Controller
{

    public function dash()
    {
        $currentUserId = Auth::id();
        $classesTeaching = Learning::where('user_id',$currentUserId)->get();
        $noOfLessons  = Learning::where('user_id',$currentUserId)
                        ->where('is_completed', false)
                        ->count();
        return view('user.userdashboard', compact('noOfLessons','classesTeaching'));
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
        $currentUserId = Auth::id();
        $noofStudents = Learning::where('teacher_id',$currentUserId)->count();
        $studentnames = Learning::where('teacher_id',$currentUserId)->with('user')->get();
        return view('user.progressSection.stupro', compact('noofStudents','studentnames'));
    }

    public function reviews()
    {
        $currentUserId = Auth::id();
        $reviews = stu_review::where('Teacher_id',$currentUserId)
        ->with('user')
        ->get();
        $count = $reviews->count();
        return view('user.reviewSection.stureview',compact('reviews','count'));
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
        $currentUserId = Auth::id();
        $classes = Learning::where('user_id',$currentUserId)->get();
        $noOfLessons  = Learning::where('user_id',$currentUserId)
                        ->where('is_completed', false)
                        ->count();
        return view('user.classSection.learning', compact('noOfLessons','classes'));
    }

    public function viewClass($class){
        $currentUserId = Auth::id();
        $match = Learning::where('user_id',$currentUserId)
            ->where('course_title',$class)
            ->first();

        if (! $match) {
            return redirect()->back()->with('error', 'Class not found or you are not enrolled.');
        }

        $course_details = Course::where('user_id',$match->teacher_id)
            ->where('title',$class)
            ->with('user')
            ->first();

        return view('user.view_class', compact('course_details','match'));
    }

    public function mypro(){
        $currentUserId = Auth::id();
        $noofTeachers = Learning::where('user_id',$currentUserId)->distinct()->get('teacher_id')->count();
        $teacher = Learning::where('user_id',$currentUserId)->get('teacher_id');
        $teachersName = User::whereIn('id',$teacher)->get();
        return view('user.progressSection.mypro', compact('noofTeachers','teachersName'));
    }
    public function stupro(){
        $currentUserId = Auth::id();
        $noofStudents = Learning::where('teacher_id',$currentUserId)->count();
        $studentnames = Learning::where('teacher_id',$currentUserId)->with('user')->get();
        return view('user.progressSection.stupro', compact('noofStudents','studentnames'));
    }

    public function stureview(){
        $currentUserId = Auth::id();
        $reviews = stu_review::where('Teacher_id',$currentUserId)
        ->with('user')
        ->get();
        $count = $reviews->count();
        return view('user.reviewSection.stureview', compact('reviews','count'));
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
    public function success(){
        return view('user.addedClass');
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
        skillexchange::updateOrCreate(
            [
            'user_id'  => $user_id,
            ],
            [
            'teach'    => $skillarray,
            'exchange' => $exchange,
            ]
        );
        return redirect()->back()->with('success', 'Record has been added');
    }

    public function matchMaking()
    {
        $currentUserId = Auth::id();

        $me = skillexchange::where('user_id',$currentUserId)->first();

        if(!$me){
            return view('user.matchmaking', ['matches' => collect()]);
        }

        $myTeaches = $me->teach;      // array
        $myWant    = $me->exchange;   // string

        $matches = skillexchange::where('user_id','!=',$currentUserId)
            ->where(function($q) use ($myTeaches, $myWant) {

                $q->whereIn('exchange', $myTeaches)
                  ->whereJsonContains('teach', $myWant);

            })
            ->with('user')
            ->get();

        return view('user.matchmaking', compact('matches','myWant'));
    }



    public function learn(Request $request){
        Learning::firstOrCreate([
            'user_id' => auth()->id(),
            'teacher_id' => $request->teacher_id,
            'course_title' => $request->course_title,
        ]);
        Learning::firstOrCreate([
            'user_id' => $request->teacher_id,
            'teacher_id' => auth()->id(),
            'course_title' => $request->exchange,
        ]);

        return redirect()->route('learning.success');
    }

    public function courseCompleted(Request $request, $match){
        $currentUserId = Auth::id();

        $course = Learning::find($match);

            $course->is_completed = true;
            $course->save();


        return redirect()->back()->with('success', 'Course marked as completed.');
    }

    public function reviewStore(Request $request){
        $request->validate([
            'review' => 'required|string|max:500',
        ]);
        $currentUserId = Auth::id();
        stu_review::updateOrCreate(
            ['Student_id' => $currentUserId,
            'Teacher_id' => $request->teacher_id,
            'course_title' => $request->course_title,
            ], [
            'review' => $request->review,
            ]
        );

        return redirect()->to(url()->previous() . '#review_section')->with('success', 'Review submitted successfully.');

    }

    public function StuEvaluate(){
        return view('user.studentEvaluation');
    }






}
