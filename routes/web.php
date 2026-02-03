<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCheck;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UserCheck::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::controller(UserController::class)
    ->middleware('auth')
    ->group(function(){

    Route::get('/dash','dash')->name('dash');
    Route::get('/inbox','inbox')->name('inbox');
    Route::get('/classes','classes')->name('classes');
    Route::get('/progress','progress')->name('progress');
    Route::get('/reviews','reviews')->name('reviews');
    Route::get('/messages','messages')->name('messages');
    Route::get('/notification','notification')->name('notification');
    Route::get('/teaching','teaching')->name('teaching');
    Route::get('/learning','learning')->name('learning');
    Route::get('/mypro','mypro')->name('mypro');
    Route::get('/stupro','stupro')->name('stupro');
    Route::get('/stureview','stureview')->name('stureview');
    Route::get('/teareviews','teareviews')->name('teareviews');
    Route::get('/profile','profile')->name('profile');
    Route::get('/createclass','createclass')->name('createclass');
    Route::post('/storeClass','storeClass')->name('storeClass');
    Route::post('/skillexchange','storeExchageSkills')->name('skillexchange');
    Route::get('/matching','matchMaking')->name('matching');
    Route::get('/successful','success')->name('learning.success');
    Route::post('/addedclass','learn')->name('learning.store');
    Route::get('/viewClass/{class}/{teacher_id}','viewClass')->name('user.viewClass');
    Route::post('/courseCompleted/{id}','courseCompleted')->name('course.completed');
    Route::post('/submitReview','reviewStore')->name('submit.review');
    Route::get('/studentEvaluation/{studentId}','StuEvaluate')->name('student.evaluation');
    Route::post('/teareviewStore','teareviewStore')->name('teareview.store');
    Route::get('/report/{teacher_id}/{course_title}','report')->name('report');
    Route::post('/submitReport','storeReport')->name('submit.report');
});

Route::controller(AdminController::class)
    ->middleware('admin')
    ->group(function(){

    Route::get('/admin/users','users')->name('admin.users');
    Route::get('/admin/dashboard','dashboard')->name('admin.dashboard');
    Route::post('/admin/delete/{id}','deleteUser')->name('admin.deleteUser');
    Route::get('/admin/reports','reports')->name('admin.reports');
    Route::post('/admin/reports','reports');
    Route::post('/admin/deleteReport/{course_id}/{report_id}','deleteReport')->name('admin.deleteReport');
    Route::get('/admin/viewcourse/{course_id}','viewcourse')->name('admin.viewcourse');

});








require __DIR__.'/auth.php';
