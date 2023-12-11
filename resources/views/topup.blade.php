@extends('include.navbar')

@section('title', 'Top-Up | Mediklik')

@section('content')
    <body>
        <h1 class="fs-1 p-3 text-center">Top-Up</h1>
        <div class="mt-5 " style="align-items: center; justify-content: center">
            <form action="/topup" method="POST">
                @csrf
                <div class="col-7 mb-4 mx-auto">
                    <label for="amount" class="form-label">Amount</label>
                    <input id="amount" type="number" class="form-control" name="amount" required>
                </div>

                <div class="d-flex" style="justify-content: center">
                    <button class="btn btn-secondary" style="background-color: #528286">Add to wallet</button>
                </div>
            </form>
        </div>
    </body>
@endsection