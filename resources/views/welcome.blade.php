@extends('layouts.app');
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide d-md-none d-lg-block d-xl-block" data-bs-ride="carousel">
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
                <img src="assets/pizza3.jfif" class="d-block img-fluid" alt="...">
            </div>
        </div>
    </div>
    <div class="container bg-white p-5" id="pizza">
        @if (session('mssg'))
            <div class="alert alert-success text-center">
                <span class="lead">{{ session('mssg') }}</span>
            </div>
        @endif
        <h1 class="display-5 mb-5 text-center">Order your Pizza</h1>
        <div class="row justify-content-between mb-4">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-img-top">
                        <img src="assets/pizza1.jfif" class="img-fluid" alt="">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h5>Tasty Veg Pizza</h5>
                            <p>Tasty Looking Attractive Pizza for The People who love tomatoes Be sure to order to has a
                                unique taste</p>
                            <h5 class="lead text-end mb-3">&#8358; 5000</h5>
                            <a href="{{ route('pizzas.create', 'Tasty-Veg-Pizza') }}?price='5000'"
                                class="btn btn-primary col-12">Order
                                Pizza</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-img-top">
                        <img src="assets/pizza2.jfif" class="img-fluid" alt="">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h5>Volcano</h5>
                            <p>Tasty Looking Attractive Pizza for The People who love tomatoes Be sure to order to has a
                                unique taste</p>
                            <h5 class="lead text-end mb-3">&#8358; 6500</h5>
                            <a href="{{ route('pizzas.create', 'volcano') }}?price='6500'"
                                class="btn btn-primary col-12">Order
                                Pizza</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-img-top">
                        <img src="assets/pizza3.jfif" class="img-fluid" alt="">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h5>Hawaiian</h5>
                            <p>Tasty Looking Attractive Pizza for The People who love tomatoes Be sure to order to has a
                                unique taste</p>
                            <h5 class="lead text-end mb-3">&#8358; 3500</h5>
                            <a href="{{ route('pizzas.create', 'Hawaiian') }}?price='3500'"
                                class="btn btn-primary col-12">Order
                                Pizza</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-img-top">
                        <img src="assets/pizza4.jfif" class="img-fluid" alt="">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h5>Pepperoni</h5>
                            <p>Tasty Looking Attractive Pizza for The People who love tomatoes Be sure to order to has a
                                unique taste</p>
                            <h5 class="lead text-end mb-3">&#8358; 4500</h5>
                            <a href="{{ route('pizzas.create', 'Pepperoni') }}?price='4500'"
                                class="btn btn-primary col-12">Order
                                Pizza</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-img-top">
                        <img src="assets/pizza3.jfif" class="img-fluid" alt="">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h5>Thin Garlic Crust</h5>
                            <p>Tasty Looking Attractive Pizza for The People who love tomatoes Be sure to order to has a
                                unique taste</p>
                            <h5 class="lead text-end mb-3">&#8358; 2500</h5>
                            <a href="{{ route('pizzas.create', 'Thin-Garlic-Crust') }}?price='2500'"
                                class="btn btn-primary col-12">Order
                                Pizza</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-img-top">
                        <img src="assets/pizza1.jfif" class="img-fluid" alt="">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h5>Veg Supreme</h5>
                            <p>Tasty Looking Attractive Pizza for The People who love tomatoes Be sure to order to has a
                                unique taste</p>
                            <h5 class="lead text-end mb-3">&#8358; 6000</h5>
                            <a href="{{ route('pizzas.create', 'Veg-Supreme') }}?price='6000'"
                                class="btn btn-primary col-12">Order
                                Pizza</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h6 class="display-6">How We Deliver</h6>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatum
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
                <h6 class="display-6">Why our Recipe is So Unique</h6>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus itaque sapiente accusantium
                    blanditiis architecto corrupti distinctio rem, ipsum adipisci veniam laudantium voluptas eius
                    voluptatum
                    nisi maxime, saepe ullam harum magni.
                </p>
            </div>
        </div>
    </div>
@endsection
