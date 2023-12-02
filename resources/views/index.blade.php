@extends('include.navbar')

@section('title', 'Homepage | Mediklik')

@section('content')
    <h1>Welcome to Mediklik</h1>
    <h2>Capsules</h2>
    <ul>
        @foreach ($capsules as $item)
            <li><a href="/item/{{$item->id}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    <h2>Tablets</h2>
    <ul>
        @foreach ($tablets as $item)
            <li><a href="/item/{{$item->id}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    <h2>Syrups</h2>
    <ul>
        @foreach ($syrups as $item)
            <li><a href="/item/{{$item->id}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    <h2>Ointments</h2>
    <ul>
        @foreach ($ointments as $item)
            <li><a href="/item/{{$item->id}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    <h2>Others</h2>
    <ul>
        @foreach ($others as $item)
            <li><a href="/item/{{$item->id}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
@endsection
