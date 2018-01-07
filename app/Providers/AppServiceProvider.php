<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Resume;
use Storage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //$info = Resume::all()->first();
        $info = simplexml_load_file('ex.xml');
		view()->share(['info'=>$info]);
       // $data = simplexml_load_file('ex.xml');
        //print_r($info);
        
        //file_put_contents('ex.xml',$data->saveXML());
        //print_r($data);
        //view()->share(['data'=>$data]);
        //echo $data->fam;
        
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
