<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Product;
use App\Http\Requests\StorePizza;
use Illuminate\Support\Facades\Auth;

class GetPizzaController extends Controller
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
}
