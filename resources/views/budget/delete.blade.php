@extends('layout.public')

@section('title') Confirm Delete @endsection

@section('content')
<div class="row justify-content-center py-5">
    <div class="col-md-6">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="card-header bg-danger text-white text-center py-3">
                <h4 class="mb-0 fw-bold"><i class="bi bi-exclamation-triangle me-2"></i>Delete Budget</h4>
            </div>
            <div class="card-body p-5 text-center">
                <div class="mb-4">
                    <i class="bi bi-trash3 text-danger" style="font-size: 4rem; opacity: 0.2;"></i>
                </div>
                
                <h5 class="mb-3">Are you sure you want to delete this budget?</h5>
                
                <div class="bg-light p-3 rounded-3 mb-4 text-start border-start border-danger border-4">
                    <p class="mb-1 text-muted small text-uppercase fw-bold">Category</p>
                    <p class="mb-2 h5 fw-bold text-dark">{{ $budget->category->name }}</p>
                    
                    <p class="mb-1 text-muted small text-uppercase fw-bold">Limit Amount</p>
                    <p class="mb-0 h5 fw-bold text-dark">${{ number_format($budget->amount, 2) }}</p>
                </div>

                <p class="text-muted small mb-4">
                    This action cannot be undone. All data related to this specific budget limit will be removed from your dashboard.
                </p>

                <div class="d-grid gap-2">
                    <form action="{{ route('budgets.destroy', $budget->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-lg w-100 rounded-pill shadow-sm">
                            Yes, Delete Forever
                        </button>
                    </form>
                    
                    <a href="{{ route('loggedin.budget') }}" class="btn btn-link text-secondary mt-2">
                        No, Keep It
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection