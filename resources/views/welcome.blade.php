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
                <img src="assets/pizza1.jfif" class="d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tasty Veg Pizza</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="assets/pizza2.jfif" class="d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cheesy Crust Pizza</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="assets/pizza3.jfif" class="d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Thin crust Pizza</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container bg-white p-5" id="pizza">
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
                            <a href="{{ route('pizzas.create', 'Tasty-Veg-Pizza') }}" class="btn btn-primary col-12">Order
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
                            <a href="{{ route('pizzas.create', 'volcano') }}" class="btn btn-primary col-12">Order
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
                            <a href="{{ route('pizzas.create', 'Hawaiian') }}" class="btn btn-primary col-12">Order
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
                            <a href="{{ route('pizzas.create', 'Pepperoni') }}" class="btn btn-primary col-12">Order
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
                            <a href="{{ route('pizzas.create', 'Thin-Garlic-Crust') }}"
                                class="btn btn-primary col-12">Order Pizza</a>
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
                            <a href="{{ route('pizzas.create', 'Veg-Supreme') }}" class="btn btn-primary col-12">Order
                                Pizza</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
