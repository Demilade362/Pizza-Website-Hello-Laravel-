<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::orderBy('id', 'DESC')->get();
        return view("pizzas.cart", [
            'carts' => $carts
        ]);
    }

    public function store()
    {
        $addCart = new Cart();

        $addCart->picture = request('picture');
        $addCart->name = request('name');
        $addCart->price = request('price');
        $addCart->description = request('description');

        $addCart->save();
        return redirect('/cart')->with('mssg', 'Added a New product to Cart');
    }
}
