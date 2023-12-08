@extends('include.navbar')

@section('content')
<body style="background-color: #abebf5 ">
    <h1 class="fs-1 p-3" >Your Wallet</h1>
    <div class="mt-5 d-flex justify-content-center">
        <span class=text-center>You have  <span class="fw-bold">{{$balance}}</span> in your wallet currently</span>   
    </div>
    <div class="p-3 me-5 d-flex justify-content-end">
        <a class="text-end" href="/topup"><button type="button bt-outline" style="background-color: #8FAEAF; border-radius: 4px; color: white; border: 5px solid #8FAEAF" >Top up</button></a>
    </div>
</body>
@endsection