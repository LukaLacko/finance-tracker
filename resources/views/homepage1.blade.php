@extends(view: "layout.public")

@section("title")
    Dobrodošli!
@endsection

@section("content")

<div class="text-center mb-5">
    <h1 style="color: green;">Budget your life!</h1>
</div>
<div class="text-center">
    <a href="{{ route('login') }}" class="btn btn-primary">Start Now!</a>
</div>

@endsection