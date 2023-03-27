@extends('layouts.app');

@section('title', 'Pizza Orders')

@section('content')
    <div class="my-5 listContainer bg-white p-4">
        <h1 class="display-5 mb-4 text-center">Pizza Orders</h1>
        @if (session('message'))
            <div class="alert alert-success text-center">
                <p>{{ session('message') }}</p>
            </div>
        @endif
        <ul class="list-group">
            @foreach ($pizzas as $pizza)
                <li class="list-group-item d-lg-flex justify-content-between">
                    <span>
                        {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
                    </span>
                    <span>
                        <a href={{ route('pizzas.show', $pizza->id) }} class="btn btn-primary d-flex align-items-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-eye-fill me-2" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </span>
                            View Order</a>
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
