<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\View;
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
        View::share('categories', Category::all());
        $cart = Cart::where('user_id', 1)->first();

        $cartItemsCount = $cart ? $cart->items()->count() : 0;
        View::share('cartIems', $cartItemsCount);

    }
}
