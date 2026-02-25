@extends("layout.public")

@section("title", "Details - " . $expense->title)

@section("content")
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            @if(session("error"))
                <div class="alert alert-danger shadow-sm border-0">{{ session("error") }}</div>
            @endif

            <div class="card shadow border-0 overflow-hidden">
                <div class="card-header bg-primary py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="text-white mb-0"><i class="bi bi-info-circle me-2"></i> Transaction Details</h4>
                        <span class="badge bg-light text-primary fs-6">{{ $expense->category->name }}</span>
                    </div>
                </div>

                <div class="card-body p-4">
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col-sm-8">
                            <label class="text-muted small text-uppercase fw-bold">Title</label>
                            <h2 class="text-dark">{{ $expense->title }}</h2>
                        </div>
                        <div class="col-sm-4 text-sm-end">
                            <label class="text-muted small text-uppercase fw-bold">Amount</label>
                            <h2 class="text-danger fw-bold">${{ number_format($expense->amount, 2) }}</h2>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-calendar-plus text-muted me-2"></i>
                                <div>
                                    <small class="text-muted d-block">Created At</small>
                                    <span class="fw-semibold">{{ $expense->created_at->format('d.m.Y H:i') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-arrow-repeat text-muted me-2"></i>
                                <div>
                                    <small class="text-muted d-block">Last Update</small>
                                    <span class="fw-semibold">{{ $expense->updated_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="text-muted small text-uppercase fw-bold mb-2">Description</label>
                        <div class="bg-light p-3 rounded-3 border-start border-primary border-4">
                            <p class="mb-0 text-secondary" style="white-space: pre-wrap;">{{ $expense->description ?? 'No extra details provided.' }}</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <a href="{{ route('loggedin.expenses') }}" class="btn btn-outline-secondary px-4">
                            <i class="bi bi-arrow-left"></i> Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection