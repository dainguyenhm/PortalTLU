<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\FaculityMajor;

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
        view()->composer(['index_Chuan.Layout.menu'], function($view){
            $faculity = FaculityMajor::whereNull('faculity_major_id')->get();
            $majors = FaculityMajor::whereNull('faculity_major_id')->with('childrenFaculityMajors')->get();
            $view->with(['faculity' => $faculity, 'majors'=>$majors]);
        });
    }
}
