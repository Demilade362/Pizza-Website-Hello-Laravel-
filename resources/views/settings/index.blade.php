@extends('layouts.app')

@section('title', 'Settings');

@section('content')
    <div class="myContainer bg-white p-5" style="
        margin: 5rem auto !important;
        ">
        <h1 class="mb-5">User Settings</h1>
        @if (session('msg'))
            <div class="alert alert-success text-center">
                {{ session('msg') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h5>Profile Information</h5>
            </div>
            <div class="card-body">
                <div class="card-content">
                    <form action="/user/setting/update/{{ $user->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="name" class="form-label">Name: </label>
                        <input type="text" class='form-control mb-3 bg-white' placeholder="Your username"
                            value="{{ $user->name }}" name="name">
                        <label for="name" class="form-label">Email: </label>
                        <input type="email" class='form-control mb-3 bg-white   ' placeholder="Your Email"
                            value="{{ $user->email }}" name="email">
                        <label for="" class="form-label">Upload Profile Picture: </label>
                        <input type="file" name="avatar" id="avatar" class="form-control mb-3">
                        <button type="submit" class="btn btn-primary col-12">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
