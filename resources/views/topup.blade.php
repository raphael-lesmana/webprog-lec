@extends('include.navbar')

@section('title', 'Top-Up | Mediklik')

@section('content')
    <h1>Top-Up</h1>
    <form action="/topup" method="POST">
        @csrf
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="">
        <button>Add to wallet</button>
    </form>
@endsection