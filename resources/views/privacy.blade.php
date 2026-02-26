@extends("layout.app")

@section('title') Privacy @endsection

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9 bg-white p-5 shadow-lg rounded">
            <h1 class="display-5 fw-bold mb-4">Privacy Policy</h1>
            <p class="text-muted">Last updated: {{ date('F d, Y') }}</p>
            
            <hr class="my-4">

            <section class="mb-5">
                <h3 class="fw-bold">1. Introduction</h3>
                <p>Welcome to <strong>FinanceTracker</strong>. We respect your privacy and are committed to protecting your personal and financial data. This Privacy Policy explains how we collect, use, and safeguard your information when you use our dashboard.</p>
            </section>

            <section class="mb-5">
                <h3 class="fw-bold">2. Data We Collect</h3>
                <p>To provide you with accurate financial tracking, we collect the following information:</p>
                <ul>
                    <li><strong>Account Data:</strong> Name, email address, and encrypted password.</li>
                    <li><strong>Financial Data:</strong> Income entries, expense categories, amounts, and dates that you manually enter.</li>
                    <li><strong>Technical Data:</strong> IP address, browser type, and usage patterns via cookies to improve your experience.</li>
                </ul>
            </section>

            <section class="mb-5">
                <h3 class="fw-bold">3. How We Use Your Data</h3>
                <p>Your data is used exclusively to:</p>
                <ul>
                    <li>Generate your financial charts and analytics.</li>
                    <li>Manage your account and provide customer support.</li>
                    <li>Ensure the security of your financial records.</li>
                </ul>
                <p class="text-danger"><strong>Note:</strong> We do not sell your financial data to third parties.</p>
            </section>

            <section class="mb-5">
                <h3 class="fw-bold">4. Data Security</h3>
                <p>We implement industry-standard encryption (SSL/TLS) to protect your data. Your financial records are stored securely in our database, and access is strictly limited to your authenticated account.</p>
            </section>

            <section class="mb-5">
                <h3 class="fw-bold">5. Your Rights</h3>
                <p>You have the right to:</p>
                <ul>
                    <li>Access the data we hold about you.</li>
                    <li>Request the deletion of your account and all associated financial records.</li>
                    <li>Export your data for personal use.</li>
                </ul>
            </section>

            <section class="mb-4">
                <h3 class="fw-bold">6. Contact Us</h3>
                <p>If you have any questions about this Privacy Policy, please contact our privacy team at:</p>
                <p class="bg-light p-3 border-start border-primary border-4">
                    <strong>Email:</strong> privacy@financetracker.com<br>
                    <strong>Location:</strong> Belgrade, Serbia
                </p>
            </section>
                        
            <div class="mt-5 text-center">
                <a href="{{ route('homepage') }}" class="btn btn-outline-secondary">Return to Home</a>
            </div>
        </div>
    </div>
</div>
@endsection