@extends('layout.public')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-lg rounded-4 p-4">
                <h3 class="fw-bold text-center mb-4">Forgot Password? 🔑</h3>
                
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small fw-bold">YOUR EMAIL ADDRESS</label>
                        <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 shadow-sm">
                        Send Reset Link
                    </button>
                    <div class="d-flex justify-content-center mt-2 ">
                        <a href="/login">Back to Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection