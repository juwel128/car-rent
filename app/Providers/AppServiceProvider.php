<?php

namespace App\Providers;
use App\Models\User;
use App\Models\Backend\Product;
use App\Models\Backend\AddToCart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Categories
        View::composer('*', function ($view) {
            $view->with('users', User::where('type', '!=', 'Admin')->orderBy('id','DESC')->get());
        });
    }
}
