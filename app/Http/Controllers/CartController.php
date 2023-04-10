<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class CartController extends Controller
{
    public function index(Cart $cart)
    {

        $carts = User::findorfail(auth()->id())->carts;
        session(['carts' => count($carts)]);
        return view('cart.carts', compact('carts'));
    }

    public function store()
    {


        try {
            Cart::create([
                'picture' => request('picture'),
                'name' => request('name'),
                'price' => request('price'),
                'description' => request('description'),
                'productID' => request('productsId'),
                'usersID' => Auth::user()->id,
            ]);
            $mssg = 'success';
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
