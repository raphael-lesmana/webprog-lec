@extends('include.navbar')

@section('title')
{{$item->name}} | Mediklik
@endsection

@section('content')
<h1>{{$item->name}}</h1>
<span>Price: {{$item->price}}</span>
<div>
    <img src="{{$item->picture}}">
</div>
<div>
    <h2>Description</h2>
    <p>{{$item->full_description}}</p>
</div>
<form action="/item/{{$item->id}}" method="POST">
    @csrf
    <button>Add to Cart</button>
</form>
@endsection