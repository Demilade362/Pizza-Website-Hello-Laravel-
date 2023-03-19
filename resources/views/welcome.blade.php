@extends('layouts.app');
@section('content')
    <div class="my-5 text-center">
        <h1 class="display-1">Pizza House</h1>
        <p>{{ session('mssg') }}</p>
        <a href="/pizzas/create" class="btn btn-primary my-2">
            Order A Pizza
        </a>
    </div>
@endsection
