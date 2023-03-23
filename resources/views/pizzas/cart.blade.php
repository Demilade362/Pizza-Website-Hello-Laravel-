@extends('layouts.app')

@section('content')
    <div class="container bg-white p-5" style="margin-top: 5rem;">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h6 class="display-6">Your Cart</h6>
            <h6 class="text-end display-6">
                ( @php
                    echo count($carts);
                @endphp )
            </h6>
        </div>
        @if (session('mssg'))
            <div class="alert alert-success text-center">
                <span>{{ session('mssg') }}</span>
            </div>
        @elseif(session('delMsg'))
            <div class="alert alert-danger text-center">
                <span>{{ session('delMsg') }}</span>
            </div>
        @endif
        <div class="row justify-content-between">
            @foreach ($carts as $cart)
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-img-top">
                            <img src="{{ $cart->picture }}" alt="{{ $cart->picture }}">
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <h5>{{ $cart->name }}</h5>
                                <p>{{ $cart->description }}</p>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <form action="{{ route('cart.delete', $cart->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-light">Remove From Cart</button>
                                    </form>
                                    <h5 class="lead text-end">&#8358; {{ $cart->price }}</h5>
                                </div>
                                <a href="{{ route('pizzas.create', $cart->name) }}?price='{{ $cart->price }}'"
                                    class="btn btn-primary col-12">Order
                                    Pizza</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
