@extends("layout.app")

@section("title") Exchange Calculator @endsection

@section("content")

<div class="container d-flex justify-content-center">
    <div class="col-md-5">
        <div class="card mt-5 shadow-sm rounded-4">
            <div class="card-header">
                <h3 class="text-center">Currency Converter</h3>
            </div>
            <div class="card-body text-center">
                <form action="{{ route('exchange.calculate') }}" method="post">
                    @csrf
                    <label for="" class="form-label mt-4 ">From:</label>
                    <select name="from" id="from" class="form-select">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">EUR</option>
                        <option value="RSD">RSD</option>
                        <option value="CHF">CHF</option>
                    </select>
                    <label for="to" class="form-label mt-4">To:</label>
                    <select name="to" id="to" class="form-control">
                        <option value="USD">USD</option>
                        <option value="EUR" selected>EUR</option>
                        <option value="RSD">RSD</option>
                        <option value="CHF">CHF</option>                    
                    </select>
                    <label for="amount" class="form-label mt-4">Amount:</label>
                    <input type="number" class="form-control mb-5" name="amount" step="0.01">

                    @if(session('result'))
                    <div class="alert alert-info bg-info bg-opacity-10 border-info text-center mt-4">
                        <h2 class="fw-bold mb-0">
                            {{ session('amount') }} {{ session('from') }} = {{ session('result') }} {{ session('to') }}
                        </h2>
                    </div>
                    @endif

                    <button type="submit" class="btn btn-success col-md-10">Convert</button>
                    <a href="/loggedin/dashboard" class="btn btn-outline-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection