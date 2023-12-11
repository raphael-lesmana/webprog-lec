@extends('include.navbar')

@section('title', 'Checkout | Mediklik')

@section('content')
    <h1>Checkout</h1>
    <form action="/checkout" method="POST">
        @csrf
        <h2 class="text-center" style="margin-top: 100px">Confirm purchase?</h2>
        <div class="text-center mb-4 mt-4">
            <button type="submit" class="btn" style="color: white; background-color: #528286">Yes</button>
        </div>
    </form>
@endsection