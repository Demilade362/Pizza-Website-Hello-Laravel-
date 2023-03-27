<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Product;
use App\Http\Requests\StorePizza;
use Illuminate\Support\Facades\Auth;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::orderBy('id', 'DESC')->get();
        return view('pizzas.index', [
            "pizzas" => $pizzas,
        ]);
    }


    public function show($id)
    {
        $pizza = Pizza::findorFail($id);
        return view('pizzas.show', [
            "pizza" => $pizza
        ]);
    }

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
        return redirect("/pizzas/products")->with('mssg', "Thanks for Ordering $username");
    }

    public function destroy($id)
    {
        $pizza = Pizza::findorFail($id);
        $pizza->delete();

        return redirect("/pizzas")->with('message', "Order Completed");
    }
}
