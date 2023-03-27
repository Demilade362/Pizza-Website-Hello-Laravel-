@extends('layouts.app');

@section('title')
    {{ $pizza->name }}
@endsection

@section('content')
    <div class="my-5 p-4 shadow-sm bg-white border-10 myContainer">
        <h1 class="h2 mb-5 text-end">Order For {{ $pizza->name }}</h1>
        <p class="lead">Type: {{ $pizza->type }}</p>
        <p class="lead">Base: {{ $pizza->base }}</p>
        <p class="lead">Address: {{ $pizza->address }}</p>
        <p class="lead">Extra Toppings:</p>
        <ul>
            @if ($pizza->toppings)
                @foreach ($pizza->toppings as $toppings)
                    <li>{{ $toppings }}</li>
                @endforeach
            @else
                <p>No Toppings</p>
            @endif
        </ul>
        <p class='lead'>Price: &#8358;{{ $pizza->price }}</p>
        <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-primary mt-3 col-12">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check" viewBox="0 0 16 16">
                        <path
                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                    </svg>
                </span>
                Complete Order</button>
        </form>
    </div>
@endsection
