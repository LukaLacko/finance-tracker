@extends("layout.app")

@section('title') About Us @endsection

@section('content')
    
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Empowering Your Financial Future</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                Founded in 2020, our mission is to strip away the complexity of personal finance and replace it with clarity.
            </p>
        </div>
    
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Our Story</h2>
                <p>
                    It started with a simple question: <strong>"Where does all the money go?"</strong> 
                    Tired of messy spreadsheets and confusing banking apps, we built a tool that 
                    doesn't just list transactions, but tells a story through data.
                </p>
                <p>
                    Today, our platform serves thousands of users who want more than just a balance 
                    sheet—they want a roadmap to their dreams, whether that's buying a home, 
                    traveling the world, or securing a peaceful retirement.
                </p>
            </div>
    
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm bg-light p-4">
                    <h4 class="fw-bold mb-3">Why Choose Us?</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <strong>Precision:</strong> Real-time tracking with 100% accuracy.
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <strong>Security:</strong> Bank-grade encryption for your data.
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <strong>Simplicity:</strong> Designed for humans, not accountants.
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <strong>Insights:</strong> Beautiful charts that make sense of your habits.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="row text-center mt-5 py-5 border-top border-bottom">
            <div class="col-md-4">
                <h2 class="fw-bold text-primary">50k+</h2>
                <p class="text-muted text-uppercase small">Active Users</p>
            </div>
            <div class="col-md-4">
                <h2 class="fw-bold text-primary">$10M+</h2>
                <p class="text-muted text-uppercase small">Transactions Tracked</p>
            </div>
            <div class="col-md-4">
                <h2 class="fw-bold text-primary">4.9/5</h2>
                <p class="text-muted text-uppercase small">User Rating</p>
            </div>
        </div>
    </div>
@endsection