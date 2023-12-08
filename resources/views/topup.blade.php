@extends('include.navbar')

@section('title', 'Top-Up | Mediklik')

@section('content')
    <body style="background-color: #abebf5 ">
        <h1 class="fs-1 p-3 ">Top-Up</h1>
        <div class="mt-5 d-flex justify-content-center">
            <form action="/topup" method="POST">
                @csrf
                <div>
                    <label class="mt-5 mb-2 fw-bold" for="amount">Amount</label>
                </div>
                <input class="mb-4 " type="number" name="amount" id="">
                <div>
                    <button class="ms-4 mt-2" style="background-color: #8FAEAF; border-radius: 4px; color: white; border: 5px solid #8FAEAF">Add to wallet</button>
                </div>
            </form>
        </div>
    </body>
@endsection