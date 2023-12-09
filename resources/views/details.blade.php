@extends('include.navbar')

@section('title')
{{$item->name}} | Mediklik
@endsection

@section('content')
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
                        <li style="font-size: 25px">Rp{{ $item->price }}</li>
                    </ul>
                    <ul class="list-unstyled">
                        <li style="color: black; font-size: 30px">Description</li>
                        <li style="font-size: 25px">{{ $item->full_description }}</li>
                    </ul>

                    @auth
                    <div class="d-flex mt-5" style="justify-content: right; align-items: center">
                        @if (Gate::allows('admin'))
                        <form action="/manage" method="POST">
                            @csrf
                            <input type="hidden" name="item_id" value="{{$item->id}}">
                            <button name="action" value="edit">Edit</button>
                            <button name="action" value="delete">Delete</button>
                        </form>    
                        @else
                        <form action="/item/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-secondary" style="background-color: #528286">Add to Cart</button>
                        </form>
                        @endif
                    </div>
                    @endauth
                </p>
            </div>
        </div>
    </div>
</div>
@endsection