@extends('include.navbar')

@section('content')
    <h1>Your Wallet</h1>
    <span>You have {{$balance}} in your wallet currently</span>
    <a href="/topup"><button>Top up</button></a>
@endsection