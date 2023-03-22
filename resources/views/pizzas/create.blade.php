@extends('layouts.app');
@section('content')
    <div class="my-5 myContainer">
        <div class="form bg-white p-5 border-2">
            <h1 class="text-center mb-3 display-4">Order Your Pizza</h1>
            @if (
                $PizzaType == 'Tasty-Veg-Pizza' && $price =='5000' ||
                        $PizzaType == 'Hawaiian' && $price=='3500' ||
                        $PizzaType == 'Veg-Supreme' && $price=='6000' ||
                        $PizzaType == 'volcano' && $price=='6500' ||
                        $PizzaType == 'Pepperoni' && $price=='4500' ||
                        $PizzaType == 'Thin-Garlic-Crust' && $price=='2500')
                <form action={{ route('pizzas.index') }} method="POST">
                    @csrf
                    <label for="name" class="form-label">Your Name:</label>
                    <input type="text" name="name" class="form-control mb-3">
                    @if ($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                    <label for="type" class="form-label">Choose Pizza Type:</label>
                    <select name="type" id="type" class="form-select mb-3">
                        @if ($PizzaType == 'Tasty-Veg-Pizza')
                            <option value="Tasty Veg">Tasty Veg</option>
                        @elseif($PizzaType == 'Hawaiian')
                            <option value="hawaiian">hawaiian</option>
                        @elseif($PizzaType == 'Veg-Supreme')
                            <option value="veg supreme">veg supreme</option>
                        @elseif($PizzaType == 'volcano')
                            <option value="volcano">volcano</option>
                        @elseif($PizzaType == 'Pepperoni')
                            <option value="Pepperoni">Pepperoni</option>
                        @elseif($PizzaType == 'Thin-Garlic-Crust')
                            <option value="Thin-Garlic-Crust">Thin Garlic Crust</option>
                        @else
                            <option value="noOrder">Type of Pizza Not found</option>
                        @endif
                    </select>
                    @if ($errors->has('type'))
                        <p class="text-danger">{{ $errors->first('type') }}</p>
                    @endif
                    <label for="address" class="form-label">Your Address:</label>
                    <input type="text" class="form-control mb-3" name="address" id="address">
                    @if ($errors->has('address'))
                        <p class="text-danger">{{ $errors->first('address') }}</p>
                    @endif
                    <label for="base" class="form-label">Choose Pizza Base:</label>
                    <select name="base" id="base" class="form-select mb-3">
                        <option value="Cheesy Crust">Cheesy Crust</option>
                        <option value="Garlic Crust">Garlic Crust</option>
                        <option value="Thin & Crust">Thin & Crust</option>
                        <option value="thick">thick</option>
                    </select>
                    <fieldset class="mb-3">
                        <label>Extra Topping:</label><br>
                        <input type="checkbox" name="toppings[]" value="mushroom" class="form-checkbox"> Mushroom <br>
                        <input type="checkbox" name="toppings[]" value="garlic" class="form-checkbox"> Garlic <br>
                        <input type="checkbox" name="toppings[]" value="Onions" class="form-checkbox"> Onions <br>
                        <input type="checkbox" name="toppings[]" value="Tomato" class="form-checkbox"> Tomato <br>
                    </fieldset>
                    @if ($errors->has('toppings[]'))
                        <p class="text-danger">{{ $errors->first('toppings[]') }}</p>
                    @endif
                    <input type="hidden" name="price" value="{{ $price }}">
                    <p class="lead">Price: &#8358;{{ $price }}</p>
                    <input type="submit" value="Order Pizza" class="btn btn-primary col-12">
                @else
                    <p class="text-center">We don't Offter that type of pizza</p>
            @endif
            </form>
        </div>
    </div>
@endsection
