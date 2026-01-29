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

});

Route::controller(AdminController::class)
    ->middleware('admin')
    ->group(function(){

    Route::get('/admin/users','users')->name('admin.users');
    Route::get('/admin/dashboard','dashboard')->name('admin.dashboard');
    Route::post('/admin/delete/{id}','deleteUser')->name('admin.deleteUser');

});








require __DIR__.'/auth.php';
