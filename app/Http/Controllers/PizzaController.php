<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Product;
use App\Http\Requests\StorePizza;
use Illuminate\Support\Facades\Auth;

class PizzaController extends Controller
{

    public function create($id)
    {
        $pizzas = Product::findorFail($id);
        return view('pizzas.create', [
            'pizza' => $pizzas
        ]);
    }


    public function store(StorePizza $request)
    {

        $request->validated();

        $pizzas = Pizza::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'base' => $request->input('base'),
            'toppings' => request('toppings'),
            'address' => $request->input('address'),
            'price' => $request->input('price'),
        ]);
        if (Auth::check()) {
            $username = Auth::user()->name;
        }
        return redirect("/home")->with('mssg', "Thanks for Ordering $username");
    }
}
