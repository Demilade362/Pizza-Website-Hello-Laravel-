@extends('layouts.app')

@section('title', 'Order Pizza')

@section('content')
    <div class="my-5 myContainer p-3">
        <div class="form bg-white border-2">
            <h1 class="text-end mb-3">Order Your Pizza</h1>
            @if ($pizza)
                <form action={{ route('orders.store') }} method="POST">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->name }}" name="name" class="form-control mb-3">
                    @if ($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                    <label for="type" class="form-label">Pizza Type:</label>
                    <input name="type" id="type" class="form-control mb-3" value="{{ $pizza->name }}" disabled
                        readonly>
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
                    @if ($errors->has('base'))
                        <p class="text-danger">{{ $errors->first('base') }}</p>
                    @endif
                    <fieldset class="mb-3">
                        <label>Extra Topping:</label><br>
                        <input type="checkbox" name="toppings[]" value="mushroom" class="form-checkbox"> Mushroom <br>
                        <input type="checkbox" name="toppings[]" value="garlic" class="form-checkbox"> Garlic <br>
                        <input type="checkbox" name="toppings[]" value="Onions" class="form-checkbox"> Onions <br>
                        <input type="checkbox" name="toppings[]" value="Tomato" class="form-checkbox"> Tomato <br>
                    </fieldset>
                    <input type="hidden" name="price" value="{{ $pizza->price }}">
                    <p class="lead">Price: &#8358;{{ $pizza->price }}</p>
                    <input type="submit" value="Order Pizza" class="btn btn-warning col-12">
                @else
                    <p class="text-center">We don't Offer that type of pizza</p>
            @endif
            </form>
        </div>
    </div>
@endsection
