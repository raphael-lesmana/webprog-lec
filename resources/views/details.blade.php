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
@auth
@if (Gate::allows('admin'))
<form action="/manage" method="POST">
    @csrf
    <input type="hidden" name="delete" value={{$item->id}}>
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
@endsection