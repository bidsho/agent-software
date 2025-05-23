<?php

namespace App\Providers;
use Illuminate\Support\Facades\Validator;
use Anhskohbo\NoCaptcha\Rules\Captcha;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         Validator::extend('captcha', function ($attribute, $value, $parameters, $validator) {
        return (new Captcha)->passes($attribute, $value);
    });
    }
}
