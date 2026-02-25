@extends("layout.private")

@section("title")
    Income
@endsection

@section("content")


<div class="container">
    @foreach ( $userIncomes as $income )
        <tr>
            <td>{{$income->title }}</td>
            <td class="text-success">{{ $income->amount }} $</td>
        </tr>
    
    @endforeach


    <div class="d-flex justify-content-between mt-5 mb-2">
        <h1>Income:</h1>
        <button class="btn btn-primary">Add income</button>
    </div>

    <table class="table table-bordered table-hover fixed-table shadow-sm">
        <thead>
            <th scope="col" class="text-decoration-underline">Kategorije</th>
            <th>JANUARY</th>
            <th>FEBRUARY</th>
            <th>MARCH</th>
            <th>APRIL</th>
            <th>MAY</th>
            <th>JUNE</th>
            <th>JULY</th>
            <th>AVGUST</th>
            <th>SEPTEMBER</th>
            <th>OCTOBER</th>
            <th>NOVEMBER</th>
            <th>DECEMBER</th>

        </thead>
        <tbody>
            <tr>
                <td class="fst-italic">Paycheck</td>
                <td>$1450</td>
                <td>$1450</td> 
                <td>$1450</td> 
                <td>$1450</td> 
                <td>$1450</td> 
                <td>$1500</td> 
                <td>$1500</td> 
                <td>$1500</td> 
                <td>$1500</td> 
                <td>$1600</td> 
                <td>$1600</td> 
                <td>$1600</td> 
            </tr>
            <tr>
                <td class="fst-italic">Tips</td>
                <td>$0</td>
                <td>$0</td>
                <td>$0</td>
                <td>$0</td>
                <td>$0</td>
                <td>$0</td>
                <td>$0</td>
                <td>$0</td>
                <td>$0</td>
                <td>$0</td>
                <td>$0</td>
                <td>$0</td>
            </tr>
            <tr>
                <td class="fst-italic">Bonus</td>
                <td>$231</td> 
                <td>$511</td> 
                <td>$111</td> 
                <td>$51</td> 
                <td>$152</td>
                <td>$222</td>
                <td>$521</td>
                <td>$500</td>
                <td>$555</td>
                <td>510</td>
                <td>201</td>
                <td>150</td>
            </tr>

        </tbody>
    </table>
</div>

@php
    // Ovo su tvoji "lažni" podaci samo za testiranje izgleda

@endphp




@endsection