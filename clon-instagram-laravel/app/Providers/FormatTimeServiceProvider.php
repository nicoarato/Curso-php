<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FormatTimeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        require_once app_path() . '\Helpers\FotmatTime.php';
        //require_once 'C:\wamp64\www\master-php\clon-instagram-laravel\app\Helpers\FotmatTime.php';
    }
}
