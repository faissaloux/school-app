<?php

namespace App\Providers;

use App\Models\Parents;
use App\Models\Student;
use App\Models\Teacher;
use App\Observers\ParentObserver;
use App\Observers\StudentObserver;
use App\Observers\TeacherObserver;
use Illuminate\Support\ServiceProvider;

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
        Teacher::observe(TeacherObserver::class);
        Parents::observe(ParentObserver::class);
        Student::observe(StudentObserver::class);
    }
}
