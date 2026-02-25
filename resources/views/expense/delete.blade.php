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
                    <h5 class="card-title">Delete <b>{{ $expense->title }}</b></h5>
                </div>
                <div class="card-body">
                    <p>Are you sure you want to delete this expense?</p>
                    <form action="{{ route('expense.delete', $id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="{{ route('loggedin.expenses') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection