@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header h4 mt-3">{{ __('Register An Account') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Username') }}</label>

                                {{-- <div class="col-md-6"> --}}
                                <input id="name" type="text"
                                    class="form-control bg-white @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{-- </div> --}}
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>

                                {{-- <div class="col-md-6"> --}}
                                <input id="email" type="email"
                                    class="form-control bg-white @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{-- </div> --}}
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>

                                {{-- <div class="col-md-6"> --}}
                                <input id="password" type="password"
                                    class="form-control bg-white @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{-- </div> --}}
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                                {{-- <div class="col-md-6"> --}}
                                <input id="password-confirm" type="password" class="form-control bg-white"
                                    name="password_confirmation" required autocomplete="new-password">
                                {{-- </div> --}}
                            </div>

                            <div class="mb-0">
                                {{-- <div class="offset-md-4"> --}}
                                <button type="submit" class="btn btn-primary col-12">
                                    {{ __('Register') }}
                                </button>
                                {{-- </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
