<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Http\Requests\StorePizza;

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

    public function create()
    {
        $type = request('type');
        $price = request('price');
        return view('pizzas.create', [
            "PizzaType" => $type,
            'price' => $price
        ]);
    }

    public function store(StorePizza $request)
    {
        $pizzas = new Pizza();
        if ($request->all()) {
            $pizzas->name = request('name');
            $pizzas->type = request('type');
            $pizzas->base = request('base');
            $pizzas->toppings = request('toppings');
            $pizzas->address = request('address');
            $pizzas->price = request('price');

            $pizzas->save();
            $name = request('name');
            return redirect("/")->with('mssg', "Thanks for Ordering $name");
        }
    }

    public function destroy($id)
    {
        $pizza = Pizza::findorFail($id);
        $pizza->delete();

        return redirect("/pizzas")->with('message', "Order Completed");
    }
}
