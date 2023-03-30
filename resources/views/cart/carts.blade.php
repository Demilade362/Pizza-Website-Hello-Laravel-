@extends('layouts.app')

@section('title', 'Your Cart')


@section('content')
    <div class="container bg-white p-3" style="margin-top: 5rem;">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h6 class="display-6">Your Cart</h6>
            <h6 class="text-end display-6">
                ( @php
                    if ($carts) {
                        echo count($carts);
                    }
                @endphp )
            </h6>
        </div>
        @if (session('mssg') == 'success')
            <div class="alert alert-success text-center">
                <span>Added to Cart Successfully</span>
            </div>
        @elseif(session('delMsg'))
            <div class="alert alert-danger text-center">
                <span>{{ session('delMsg') }}</span>
            </div>
        @elseif(session('mssg') == 'warning')
            <div class="alert alert-warning text-center">
                <span>Cannot Add the Same Product to Cart</span>
            </div>
        @endif
        <div class="row justify-content-between">
            @if ($carts)
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
                                        <form action="{{ route('carts.delete', $cart->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-light">Remove From Cart</button>
                                        </form>
                                        <h5 class="lead text-end">&#8358; {{ $cart->price }}</h5>
                                    </div>
                                    <a href="{{ route('pizzas.create', $cart->productID) }}"
                                        class="btn btn-primary d-block">Order
                                        Pizza</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="lead text-center">You Have An Empty Cart. Check out <a href="{{ route('home') }}">Products
                        Page</a> </p>
            @endif
        </div>
    </div>
@endsection
