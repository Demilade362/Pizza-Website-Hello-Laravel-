@extends('layouts.app')

@section('title', 'Pizzas')

@section('content')
    <div class="container bg-white rounded py-4" id="products">
        @if (session('mssg'))
            <div class="alert alert-success text-center">
                <span class="lead">{{ session('mssg') }}</span>
            </div>
        @endif
        <div class="row justify-content-between mb-4">
            @foreach ($products as $product)
                <div class="col-lg-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-img-top">
                            <img src="../{{ $product->picture }}" class="img-fluid" alt="{{ $product->picture }}">
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <h4>{{ $product->name }}</h4>
                                <p>{{ $product->description }}</p>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <form action="{{ route('carts.post') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="picture" value="{{ $product->picture }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        <input type="hidden" name="description" value="{{ $product->description }}">
                                        <input type="hidden" name="productsId" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-light d-flex align-items-center">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-cart4  me-2" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                                </svg>
                                            </span>
                                            <span>Add to Cart</span>
                                        </button>
                                    </form>
                                    <h5 class="lead text-end">&#8358; {{ $product->price }}</h5>
                                </div>
                                <a href={{ route('orders.create', $product->id) }}
                                    class="btn btn-warning shadow-sm d-block">Order
                                    Pizza</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
@endsection
