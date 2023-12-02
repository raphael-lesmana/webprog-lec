@extends('include.navbar')

@section('title', 'Checkout | Mediklik')

@section('content')
    <h1>Checkout</h1>
    <form action="/checkout" method="POST">
        @csrf
        <h2>Confirm purchase?</h2>
        <button>yes</button>
    </form>
@endsection