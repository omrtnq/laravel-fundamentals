<?php

namespace App\Providers;

use App\Models\Student;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('welcomeTitle', 'Welcome to Student System');
        View::composer('student.index', function ($view) {
            $view->with('students', Student::all());
        });

        // Paginator::useBootstrap();
        Paginator::useTailwind();
    }
}
