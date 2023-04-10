<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Product $product, Cart $cart)
    {
        if (Schema::hasTable('carts')) {
            $carts = $cart->where('usersID',  Auth::id())
                ->orderBy('id', 'DESC')
                ->lazy();
        }

        session(['carts' => count($carts)]);

        $products = $product->latest()
            ->paginate(6);
        return view('home', compact('products'));
    }
}
