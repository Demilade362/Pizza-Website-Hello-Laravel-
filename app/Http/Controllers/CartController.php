<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class CartController extends Controller
{
    public function index()
    {

        $cart = User::findorFail(Auth::id())->carts;

        return view('cart.carts', [
            'carts' => $cart
        ]);
    }

    public function store()
    {
        $addCart = new Cart();

        try {
            $addCart->picture = request('picture');
            $addCart->name = request('name');
            $addCart->price = request('price');
            $addCart->description = request('description');
            $addCart->productID = request('productsId');
            $addCart->usersID = Auth::user()->id;
            $mssg = 'success';

            $addCart->save();
        } catch (\Throwable $th) {
            $mssg = "warning";
        }

        return redirect('/cart')->with('mssg', $mssg);
    }

    public function destroy($id)
    {
        $deleteId = Cart::findorFail($id);
        $deleteId->delete();

        return redirect('/cart')->with('delMsg', 'Delete From Cart Successfully');
    }
}
