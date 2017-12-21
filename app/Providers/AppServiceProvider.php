<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Resume;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $info = Resume::all()->first();
		view()->share(['info'=>$info]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
