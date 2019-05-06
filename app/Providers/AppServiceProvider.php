<?php

namespace App\Providers;

use function foo\func;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        \View::composer('layouts.sidebar', function ($view){
            $topics = \App\Topic::all();
            $view->with('topics',$topics);
        });

        \DB::listen(function ($query) {
            $sql = $query->sql;
            $bindings = $query->bindings;
            $time = $query->time;

            if ($time > 2){
                \Log::debug(var_export(compact('sql','bindings','time'),true));
            }
        });
    }
}
