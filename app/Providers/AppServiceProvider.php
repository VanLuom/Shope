<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        view()->composer('*', function ($view) {
            $view->with('categories', Category::all());
            $view->with('products', Product::all());
        });
        View::composer('*', function ($view) {
            if (auth()->check()) {
                $totalProductsInCart = Order::where('user_id', auth()->user()->id)->sum('quantity');
                $view->with('totalProductsInCart', $totalProductsInCart);
            }
        });
    }
}
