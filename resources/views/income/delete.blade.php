@extends("layout.public")

@section("title")
Delete
@endsection

@section("content")
<div class="row justify-content-center">
    <div class="col-md-6 mt-5">
        <div class="card text-center">
            <div class="card-header">
                <div class="card-title">
                    <h5 class="card-title">Delete <b>{{ $income->title }}</b></h5>
                </div>
                <div class="card-body">
                    <p>Are you sure you want to delete this income?</p>
                    <form action="{{ route('income.delete', $id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="{{ route('loggedin.income') }}" class="btn btn-outline-secondary px-4">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection