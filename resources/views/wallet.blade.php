@extends('include.navbar')

@section('content')
<body style="background-color: #abebf5 ">
    <h1 class="fs-1 p-3" >Your Wallet</h1>
    <div class="mt-5 d-flex justify-content-center">
        <span class=text-center>You have  <span class="fw-bold">Rp {{$balance/1000}}.000</span> in your wallet currently</span>   
    </div>
    <div class="p-3 me-5 d-flex justify-content-end">
        <a class="text-end" href="/topup">
            <button class="btn btn-secondary" style="background-color: #528286">Top up</button>
        </a>
    </div>
</body>
@endsection