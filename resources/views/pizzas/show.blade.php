@extends('layouts.app');
@section('content')
    <div class="my-5 p-4 shadow-sm bg-white border-10 myContainer">
        <h1 class="h2 mb-5 text-end">Order For {{ $pizza->name }}</h1>
        <p>Type: {{ $pizza->type }}</p>
        <p>Base: {{ $pizza->base }}</p>
        <p>Address: {{ $pizza->address }}</p>
        <p>Extra Toppings:</p>
        <ul class="list-group w-50">
            @foreach ($pizza->toppings as $toppings)
                <li class="list-group-item">{{ $toppings }}</li>
            @endforeach
        </ul>
        <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-primary mt-3 col-12">Complete Order</button>
        </form>
    </div>
@endsection
