<?php

namespace App\Providers;
use App\Models\NoofCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
            $classes = NoofCategory::select('title')->get();
            $view->with(
                [
                    'totalClasses'=>$classes->count(),
                    'classes' => $classes,

                ]
            );
        });
    }
}
