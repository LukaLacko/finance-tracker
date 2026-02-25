@extends('layout.public')

@section("title")
    Login
@endsection

@section("content")

<div class="containe mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session("success"))
            <div class="alert alert-success">
                {{ session("success") }}
            </div>
            @endif
            @if(session("error"))
            <div class="alert alert-danger">
                {{ session("error") }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('storelogin') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Write your email here">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Write your password here">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>


                        <div class="d-flex justify-content-between">
                            <p></p>
                            <a href="{{ route("password.request") }}" class="text-decoration-none small">Forgotten your password?</a>
                        </div>
                    </div>
        
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    <p class="small">Don't have an account? <a href="{{ route("register") }}">Sign up</a></p>
                    <p class="mt-5 mb-3 text-muted">&copy; 2026</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection