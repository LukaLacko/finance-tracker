@extends("layout.app")

@section('content')
<link href="{{ asset(path: 'css/signin.css') }}" rel="stylesheet">

<div class="signin-wrapper">
    <main class="form-signin text-center">
        <form method="post">
          @csrf
            <img class="mb-4" src="{{ asset('img/404-Hlbfm6J7VR8-unsplash.jpg') }}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating mb-2">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                <div class="d-flex justify-content-between">
                    <p></p>
                    <a href="{{ route("password.request") }}" class="text-decoration-none small">Forgotten your password?</a>
                </div>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="small">Don't have an account? <a href="{{ route("register") }}">Sign up</a></p>
            <p class="mt-5 mb-3 text-muted">&copy; 2026</p>
        </form>
    </main>
</div>
@endsection