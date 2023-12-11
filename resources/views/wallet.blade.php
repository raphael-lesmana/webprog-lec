@extends('include.navbar')

@section('content')
<body>
    <h1 class="fs-1 p-3 text-center">Your Wallet</h1>
    <div class="mt-5 d-flex justify-content-center" style="font-size: 30px">
        <span class=text-center>You have  <span class="fw-bold">Rp {{$balance/1000}}.000</span> in your wallet currently.</span>   
    </div>
    <div class="d-flex justify-content-end" style="padding-top: 20px; padding-right: 400px">
        <a class="text-end" href="/topup">
            <button class="btn btn-secondary" style="background-color: #528286">Top up</button>
        </a>
    </div>
</body>
@endsection