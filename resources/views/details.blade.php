@extends('include.navbar')

@section('title')
{{$item->name}} | Mediklik
@endsection

@section('content')
<!-- <h1>{{$item->name}}</h1>
<span>Price: {{$item->price}}</span>
<div>
    <img src="/storage/assets/items/{{$item->picture}}">
</div>
<div>
    <h2>Description</h2>
    <p>{{$item->full_description}}</p>
</div>
@auth
@if (Gate::allows('admin'))
<form action="/manage" method="POST">
    @csrf
    <input type="hidden" name="delete" value="{{$item->id}}">
    <a href="/update/{{$item->id}}"><button>Edit</button></a>
    <button name="action" value="delete">Delete</button>
</form>    
@else
<form action="/item/{{$item->id}}" method="POST">
    @csrf
    <button>Add to Cart</button>
</form>
@endif
@endauth -->

<div class="card text-black col-11 mx-auto mb-3">
    <div class="row g-0" style="background-color: #CED9BB">
        <div class="col-md-6">
            <img src="/storage/assets/items/{{$item->picture}}" class="img-fluid rounded-start" alt="No Picture Found" style="object-fit: cover; height: 100%">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title" style="color: black; font-size: 50px">{{ $item->name }}</h5>
                <p class="card-text">
                    <ul class="list-unstyled">
                        <li style="color: black; font-size: 30px">Price</li>
                        <li style="font-size: 25px">Rp{{ $item->price }}000.00,-</li>
                    </ul>
                    <ul class="list-unstyled">
                        <li style="color: black; font-size: 30px">Description</li>
                        <li style="font-size: 25px">{{ $item->full_description }}</li>
                    </ul>

                    @auth
                    @if (Gate::allows('admin'))
                    <form action="/manage" method="POST">
                        @csrf
                        <input type="hidden" name="delete" value="{{$item->id}}">
                        <a href="/update/{{$item->id}}"><button>Edit</button></a>
                        <button name="action" value="delete">Delete</button>
                    </form>    
                    @else
                    <form action="/item/{{$item->id}}" method="POST">
                        @csrf
                        <button>Add to Cart</button>
                    </form>
                    @endif
                    @endauth
                </p>
            </div>
        </div>
    </div>
</div>
@endsection