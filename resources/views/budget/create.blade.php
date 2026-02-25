@extends('layout.public')

@section('title') Create a Budget @endsection

@section('content')

@if(session("error"))
<div class="alert alert-error alert-dismissible fade show">
    {{ session("error") }}
</div>
@endif

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow mt-5">
            <div class="card-header">
                <h3>Create your own budget!</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-floating mt-2">
                        <select name="expense_category_id" id="" class="form-select" placeholder="">
                            @foreach($categories as $category)
                                <option value="{{ $category->id}}" class="form-option">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <label for="" class="form-label">Category</label>
                    </div>

                    <div class="form-floating mt-3">
                        <input class="form-control" type="nubmer" id="floatingInput" name="amount" placeholder="...">
                        <label for="floatingInput" class="floatingInput">Amount</label>
                    </div>
                    
                    <div class="form-floating mt-3">
                        <select name="period" id="" class="form-select">
                            <option value="monthly">Monthly</option>
                            <option value="weekly">Weekly</option>
                        </select>
                        <label for="" class="form-label">Period</label>
                    </div>
                    <button type="submit" class="btn btn-outline-primary mt-4">Add a Budget</button>
                    <a href="/loggedin/budget" class="btn btn-outline-secondary mt-4 ms-2">Back</a>
                </form>
            </div>  
        </div>
    </div>
</div>

@endsection