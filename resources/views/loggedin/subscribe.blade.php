@extends('layout.public')

@section('title')
Financial Advice
@endsection

@section('content')
<style>
    body {
        background-color: #C0C0C0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<div class="d-flex justify-content-center vh-100 pt-5" style="background-color: #C0C0C0" >
    <div class="col-md-6 mt-5">
        <div class="card shadow-lg">
            <div class="card-header text-center" style="background-color: #A0A0A0">
                <h3>Get Financial Advice</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-4 ms-3 me-3">
                        <p class=" text-center fw-lighter">Subscribe to unlock exclusive financial insights. Get weekly tips, smart saving tricks, and personalized spending statistics.</p>
                    </div>
                    <div class="form-floating mb-4 ms-3 me-3">
                        <input type="email" name="email" class="form-control border-primary" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput" class="floatingInput">Email</label>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="row col-md-5 justify-content-center text-center">
                            <button type="submit" class="btn btn-dark mb-2">Subscribe</button>
                            <a href="/loggedin/dashboard" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover col-md-6">No thanks</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection