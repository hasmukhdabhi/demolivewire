@extends('layouts.app')

@section('main')
    <div class="container">
        <a href="{{ url('/') }}">Back</a>
        <h2>Forget Password Form</h2>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            @error('email')
                <text class="danger">{{ $message }}</text>
            @enderror

            <button type="submit" class="btn btn-dark">Send Link</button>
        </form>
    </div>
@endsection
