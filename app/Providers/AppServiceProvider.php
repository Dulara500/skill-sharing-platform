<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Course;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {


    }

    public function boot(): void
    {
        View::composer(['user.classSection.teaching','user.userdashboard','admin.dashboard'], function ($view) {
            if(Auth::check()){
                $userID = Auth::id();
                $classes = Course::where('user_id',$userID)->select('title')->get();

                $view->with([
                    'totalClasses'=>$classes->count(),
                    'classes' => $classes,
                ]);
            }else{
                $view->with([
                    'totalClasses' => 0,
                    'classes' => collect(),
                ]);
            }
            $view->with('tcount', Course::where('is_certified_teacher', true)->distinct('user_id')->count());
            $view->with('coursecount', Course::distinct('title')->count('title'));

        });
        view::share('usercount',DB::table('users')->where('user_type','!=','admin')->count());
        view::share('totalClasses', Course::distinct()->count('title'));
    }
}
