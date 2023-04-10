@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide d-none d-lg-block d-xl-block" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Veg Supreme</h5>
                    <p>Tasty Looking Attractive Pizza for the Belly</p>
                </div>
                <img src="assets/pizza1.jfif" class="d-block img-fluid" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Volcano</h5>
                    <p>Cheesy is What We Like Try our Cheesy Crust</p>
                </div>
                <img src="assets/pizza2.jfif" class="d-block img-fluid" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pepperoni</h5>
                    <p>Pepperoni Pizza is full of Pepper and Attractive, nice looking Pizza to the eye</p>
                </div>
                <img src="assets/pizza4.jfif" class="d-block img-fluid" alt="...">
            </div>
        </div>
    </div>
    <div class="container" id="pizza">
        <h1 class="display-5 mb-5 pt-5 text-center">Order your Pizza</h1>
        <div class="row justify-content-between mb-4">
            @foreach ($products as $product)
                <div class="col-lg-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-img-top">
                            <img src="{{ $product->picture }}" class="img-fluid" alt="{{ $product->picture }}">
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <h5>{{ $product->name }}</h5>
                                <p>{{ $product->description }}</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    @auth
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
                                    @endauth
                                    <h5 class="lead text-end">&#8358; {{ $product->price }}</h5>
                                </div>
                                <a href={{ route('orders.create', $product->id) }}
                                    class="btn btn-primary shadow-sm d-block">Order
                                    Pizza</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h6 class="display-6 text-center">How We Deliver</h6>
                    <p class="lead text-center p-5">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Cupiditate voluptatum
                        aliquid sint tenetur cum, accusamus temporibus alias, unde excepturi sed voluptatibus! Facilis eaque
                        explicabo veniam soluta assumenda quibusdam eum reiciendis.</p>
                </div>
                <div class="col-lg-6">
                    <img src="assets/delivery.jpg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <img src="assets/order.jpg" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h6 class="display-6 text-center">Why our Recipe is So Unique</h6>
                <p class="lead text-center p-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus itaque sapiente accusantium
                    blanditiis architecto corrupti distinctio rem, ipsum adipisci veniam laudantium voluptas eius
                    voluptatum
                    nisi maxime, saepe ullam harum magni.
                </p>
            </div>
        </div>
    </div>
@endsection
