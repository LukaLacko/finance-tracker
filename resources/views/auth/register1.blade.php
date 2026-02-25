@extends("layout.public")

@section("title")
    Register
@endsection

@section("content")

<div class="continer mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-6">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li> 
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Register</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('storeRegister') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Write your name">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Write your email">
                        </div>

                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Write your password">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection