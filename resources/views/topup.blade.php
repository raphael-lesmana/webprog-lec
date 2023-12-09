@extends('include.navbar')

@section('title', 'Top-Up | Mediklik')

@section('content')
    <body style="background-color: #abebf5">
        <h1 class="fs-1 p-3 ">Top-Up</h1>
        <div class="mt-5 d-flex" style="align-items: center; justify-content: center">
            <form action="/topup" method="POST">
                @csrf
                <div>
                    <label class="mt-5 mb-2 fw-bold" for="amount" style=>Amount</label>
                </div>
                <input class="mb-4" type="number" name="amount" id="">
                <div class="d-flex" style="justify-content: center">
                    <button class="btn btn-secondary" style="background-color: #528286">Add to wallet</button>
                </div>
            </form>
        </div>
    </body>
@endsection