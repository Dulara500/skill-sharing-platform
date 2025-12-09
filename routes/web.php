<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCheck;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UserCheck::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/inbox',[UserController::class, 'inbox'])->name('inbox');

Route::controller(UserController::class)->group(function(){
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/inbox','inbox')->name('inbox');
    Route::get('/classes','classes')->name('classes');
    Route::get('/progress','progress')->name('progress');
    Route::get('/reviews','reviews')->name('reviews');

});

require __DIR__.'/auth.php';
