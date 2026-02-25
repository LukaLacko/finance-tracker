@extends('layout.public')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-lg rounded-4 p-4">
                <h3 class="fw-bold text-center mb-4">Set New Password 🔒</h3>

                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-3">
                        <label class="form-label small fw-bold">EMAIL ADDRESS</label>
                        <input type="email" name="email" class="form-control rounded-pill" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">NEW PASSWORD</label>
                        <input type="password" name="password" class="form-control rounded-pill" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">CONFIRM NEW PASSWORD</label>
                        <input type="password" name="password_confirmation" class="form-control rounded-pill" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100 rounded-pill py-2">
                        Reset Password
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection