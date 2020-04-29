<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      Blade::directive('css', function($type_id) {
        return "
        <link rel='stylesheet' href='{{ asset('frontend/css/main.min.css') }}'>
        <link rel='stylesheet' href='{{ asset('frontend/css/style.css') }}'>
        <link rel='stylesheet' href='{{ asset('frontend/css/color.css') }}'>
        <link rel='stylesheet' href='{{ asset('frontend/css/responsive.css') }}'>
        ";
      });

      Blade::directive('js', function($type_id) {
        return "
        <script src='{{ asset('frontend/js/main.min.js') }}'></script>
        <script src='{{ asset('frontend/js/script.js') }}'></script>
        ";
      });
    }
}
