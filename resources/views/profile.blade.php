@extends('include.navbar')

@section('My Profile | Mediklik')

@section('content')
<h1 style="margin-bottom: 50px">User profile</h1>

<div class="card text-white col-11 mx-auto mb-3" style="background-color:#CED8BB">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="/storage/assets/profiles/{{ $user->picture }}" class="img-fluid rounded-start" alt="No Picture Found" style="object-fit: cover; height: 100%">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title" style="color: black; font-size: 30px; text-align:center">{{ $user->name }}</h5>
                <p class="card-text">
                    <ul class="list-unstyled">
                        <li style="color: black; font-size: 25px">Phone Number</li>
                        <li style="font-size: 20px">{{ $user->phone_number }}</li>
                    </ul>
                    <ul class="list-unstyled">
                        <li style="color: black; font-size: 26px">Address</li>
                        <li style="font-size: 20px">{{ $user->address }}</li>
                    </ul>
                    <a href="/settings"><button type="button" class="btn btn-light" style="color:black">Edit</button></a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection