<?php

namespace App\Providers;

use App\Cart;
use App\product;
use Illuminate\Support\ServiceProvider;
use App\ProductType;
use Session;


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
        view()->composer('header', function ($view) {
            $loai_sp = ProductType::all();
            $view->with('loaisp', $loai_sp);
        });

        view()->composer('header', function ($view) {
            if (Session('cart')) {
                $old_cart = Session::get('cart');
                $cart = new Cart($old_cart);
                $view->with(['cart' => Session::get('cart'), 'product_cart' => $cart->items,
                    'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty]);
            }

        });

    }
}
