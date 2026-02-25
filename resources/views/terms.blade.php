@extends("layout.app")

@section('title') Terms of Service @endsection

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9 bg-white p-5 shadow-sm rounded border-top border-4 border-primary">
            <h1 class="display-5 fw-bold mb-4">Terms of Service</h1>
            <p class="text-muted">Effective Date: {{ date('F d, Y') }}</p>
            
            <hr class="my-4">

            <section class="mb-5">
                <h3 class="fw-bold text-dark">1. Acceptance of Terms</h3>
                <p>By accessing or using <strong>FinanceTracker</strong>, you agree to be bound by these Terms of Service. If you do not agree to all of these terms, do not use our services.</p>
            </section>

            <section class="mb-5">
                <h3 class="fw-bold text-dark">2. User Accounts</h3>
                <p>To use our dashboard, you must register for an account. You are responsible for:</p>
                <ul>
                    <li>Maintaining the confidentiality of your password.</li>
                    <li>All activities that occur under your account.</li>
                    <li>Providing accurate and complete information.</li>
                </ul>
            </section>

            <section class="mb-5">
                <h3 class="fw-bold text-dark">3. Not Financial Advice</h3>
                <p class="p-3 bg-warning bg-opacity-10 border-start border-warning border-4 text-dark">
                    <strong>Important:</strong> FinanceTracker is a tool for data visualization and expense tracking. We do not provide financial, investment, or legal advice. Any financial decisions you make based on the data in this app are at your own risk.
                </p>
            </section>

            <section class="mb-5">
                <h3 class="fw-bold text-dark">4. Prohibited Conduct</h3>
                <p>You agree not to use the service for any illegal purposes or to:</p>
                <ul>
                    <li>Attempt to gain unauthorized access to our servers.</li>
                    <li>Upload viruses or malicious code.</li>
                    <li>Use automated systems (bots) to scrape data.</li>
                </ul>
            </section>

            <section class="mb-5">
                <h3 class="fw-bold text-dark">5. Limitation of Liability</h3>
                <p>In no event shall FinanceTracker be liable for any indirect, incidental, or consequential damages resulting from your use or inability to use the service, including but not limited to financial losses.</p>
            </section>

            <section class="mb-5">
                <h3 class="fw-bold text-dark">6. Termination</h3>
                <p>We reserve the right to suspend or terminate your account at any time, without notice, for conduct that we believe violates these Terms or is harmful to other users of the service.</p>
            </section>

            <section class="mb-4">
                <h3 class="fw-bold text-dark">7. Changes to Terms</h3>
                <p>We may update these terms from time to time. We will notify you of any changes by posting the new Terms of Service on this page.</p>
            </section>

            <div class="mt-5 text-center">
                <a href="{{ route('homepage') }}" class="btn btn-outline-secondary">Return to Home</a>
            </div>
        </div>
    </div>
</div>
@endsection