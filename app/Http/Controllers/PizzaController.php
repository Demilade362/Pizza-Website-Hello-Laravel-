<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        // $pizzas = Pizzas::all();
        // $pizzas = Pizzas::where('id', 2)->get();
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
        return view('pizzas.create');
    }

    public function store()
    {
        $pizzas = new Pizza();

        $pizzas->name = request('name');
        $pizzas->type = request('type');
        $pizzas->base = request('base');
        $pizzas->toppings = request('toppings');
        $pizzas->address = request('address');

        $pizzas->save();
        $name = request('name');
        return redirect("/")->with('mssg', "Thanks for Ordering $name");
    }

    public function destroy($id)
    {
        $pizza = Pizza::findorFail($id);
        $pizza->delete();

        return redirect("/pizzas")->with('message', "Order Completed");
    }
}
