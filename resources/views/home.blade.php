@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 10.5rem">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p class="mb-3">{{ __('You are logged in!') }}</p>
                        <div class="d-flex justify-content-between">
                            <p>Hello {{ Auth::user()->name }}</p>
                            <p><a href="/pizzas">View Pizzas</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
