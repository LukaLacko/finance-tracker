@extends("layout.app")

@section('content')
<link href="{{ asset('css/signin.css') }}" rel="stylesheet">

<style>
    .form-signin{
        width: 100%;
        max-width: 600px; /* Povećaj sa 330px na 450px */
        padding: 15px;
        margin: auto;
    }
</style>

<div class="signin-wrapper">
    <main class="form-signin text-center">
        <form method="post">
          @csrf
          <div class="card shadow-lg rounded-4">
            <div class="card-body">
                <img class="" src="{{ asset('img/Expense-tracker logo.png') }}" alt="Logo" style="width: 150px; height: auto;">
            <h1 class="h3 mb-3 fw-normal">Please register</h1>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-2">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
            <p>Already have an account? <a href="{{ route("login") }}">Log in</a></p>
            <p class="mt-5 mb-3 text-muted">&copy; 2026</p>
            </div>
          </div>
            
        </form>
    </main>
</div>
@endsection