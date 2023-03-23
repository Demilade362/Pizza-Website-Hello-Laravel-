<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::orderBy('id', 'DESC')->get();
        return view('pizzas.cart', [
            'carts' => $cart
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
        return redirect('/cart')->with('mssg', 'Added to Cart Successfully');
    }

    public function destroy($id)
    {
        $deleteId = Cart::findorFail($id);
        $deleteId->delete();

        return redirect('/cart')->with('delMsg', 'Delete From Cart Successfully');
    }
}
