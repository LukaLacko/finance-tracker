@extends('layout.public')

@section('title') Budget @endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-5">
    <div class="mt-2">
        <h2 class="fw-bold mb-0">My Budgets</h2>
        <p class="text-muted mb-0">Track your monthly spending limits</p>
    </div>
    <div class="column">
        @if($budgets->count() > 0)
        <a href="/budget/create" class="btn btn-primary rounded-pill px-4 shadow-sm">
            Add New Budget
        </a>
    @endif
        <a href="/loggedin/dashboard" class="btn btn-secondary rounded-pill shadow-sm">
            Back
        </a>
    </div>
</div>
<div class="row g-4">
    @forelse($budgets as $budget)
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="text-uppercase fw-bold text-muted small mb-0">
                            {{ $budget->category->name }}
                        </h6>
                        <span class="badge bg-light text-dark rounded-pill border">
                            {{ $budget->period }}
                        </span>
                    </div>

                    <div class="mb-2">
                        <h3 class="fw-bold mb-0">${{ number_format($budget->spent, 2) }}</h3>
                        <p class="text-muted small">of ${{ number_format($budget->amount, 2) }} limit</p>
                    </div>

                    <div class="progress rounded-pill mb-3" style="height: 12px;">
                        <div class="progress-bar bg-{{ $budget->color }} progress-bar-striped progress-bar-animated" 
                             role="progressbar" 
                             style="width: {{ min($budget->percentage, 100) }}%">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <small class="fw-bold text-{{ $budget->color }}">
                            {{ round($budget->percentage) }}% Used
                        </small>
                        <small class="text-muted">
                            @if($budget->remaining > 0)
                                ${{ number_format($budget->remaining, 2) }} left
                            @else
                                <span class="text-danger fw-bold">Over limit!</span>
                            @endif
                        </small>
                    </div>
                    <div class="column mt-3 d-flex justify-content-between">
                        <button type="button" class="btn btn-sm btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $budget->id }}">
                            Edit
                        </button>                      
                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $budget->id }}">
                            Delete
                        </button>                    
                    </div>
                    <div class="modal fade" id="deleteModal{{ $budget->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0 shadow-lg rounded-4">
                                <div class="modal-body p-5 text-center">
                                    <div class="text-danger mb-4">
                                        <i class="bi bi-exclamation-octagon" style="font-size: 4rem;"></i>
                                    </div>
                                    
                                    <h4 class="fw-bold text-dark">Are you sure?</h4>
                                    <p class="text-muted mb-4">
                                        You are about to delete the budget for <strong class="text-dark">{{ $budget->category->name }}</strong>. 
                                        This action cannot be undone.
                                    </p>
                    
                                    <div class="d-flex justify-content-center gap-2">
                                        <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                                        
                                        <form action="{{ route('budget.destroy', $budget->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger rounded-pill px-4 shadow-sm">
                                                Yes, Delete it
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="editModal{{ $budget->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0 shadow-lg rounded-4">
                                <div class="modal-header border-0 pb-0">
                                    <h5 class="fw-bold px-3 pt-3">Edit Budget: {{ $budget->category->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('budget.update', $budget->id) }}" method="POST">
                                    @csrf
                                    @method('PUT') <div class="modal-body p-4">
                                        <div class="mb-3 text-start">
                                            <label class="form-label text-muted small fw-bold">MONTHLY LIMIT ($)</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light border-0 text-muted">$</span>
                                                <input type="number" step="0.01" name="amount" class="form-control bg-light border-0" value="{{ $budget->amount }}" required>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="modal-footer border-0 p-4 pt-0">
                                        <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary rounded-pill px-4 shadow-sm">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <div class="mb-4">
                <i class="bi bi-wallet2 text-muted" style="font-size: 4rem; opacity: 0.3;"></i>
            </div>
            <h5 class="text-muted">No budgets set. Let's start tracking!</h5>
            <p class="text-muted mb-4">Setting a budget helps you save money and control expenses.</p>
            <a href="/budget/create" class="btn btn-outline-primary rounded-pill px-4">
                Create Your First Budget
            </a>
        </div>
    @endforelse
</div>

@endsection