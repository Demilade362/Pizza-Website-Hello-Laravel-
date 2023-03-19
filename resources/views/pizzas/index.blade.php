@extends('layouts.app');
@section('content')
    <div class="my-5 myContainer">
        <h1 class="display-1 text-end">Pizza List</h1>
        <p>{{ session('message') }}</p>
        <ul class="list-group">
            @foreach ($pizzas as $pizza)
                <li class="list-group-item d-lg-flex justify-content-between">
                    <span>
                        {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
                    </span>
                    <span>
                        <a href={{ route('pizzas.show', $pizza->id) }} class="btn btn-primary"> View Order</a>
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
