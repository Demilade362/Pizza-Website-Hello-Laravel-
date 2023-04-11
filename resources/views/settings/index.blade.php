@extends('layouts.app')

@section('title', 'Settings')

@section('content')
    <div class="myContainer bg-white p-5">
        <h1 class="mb-3">User Settings</h1>
        @if (session('msg'))
            <div class="alert alert-success text-center">
                {{ session('msg') }}
            </div>
        @endif
        <div class="card border-0">
            <div class="card-header">
                <div class="h3 mt-3 text-start">
                    Profile Information
                </div>
            </div>
            <div class="card-body">
                <div class="card-content">
                    <form action="/user/setting/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label for="name" class="form-label">Name: </label>
                        <input type="text" class='form-control mb-3 bg-white' value="{{ $user->name }}" name="name">
                        @if ($errors->has('name'))
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        @endif
                        <label for="email" class="form-label">Email: </label>
                        <input type="email" class='form-control mb-3 bg-white' value="{{ $user->email }}" name="email">
                        @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @endif
                        <label for="" class="form-label">Upload Profile Picture: </label>
                        <input type="file" name="avatar" id="avatar" class="form-control mb-3">
                        <button type="submit" class="btn btn-warning col-12">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
