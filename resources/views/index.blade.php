@extends('include.navbar')

@section('title', 'Homepage | Mediklik')

@section('content')
    <div>
        <h1 style="margin-left: 55px; margin-bottom: 25px">Welcome to Mediklik</h1>
        
        <div class="category" style="margin-bottom: 25px">
            <h2 style="margin-left: 55px" >Capsules</h2>
            <div class=grid id="main-grid">
                <div class=row>
                    @foreach ($capsules as $item)
                    <div class="col-3" style="margin-left: 55px; margin-right: 55px">
                        <a href="/item/{{$item->id}}">
                        <button class="btn btn-light active" type="button" style="background-color: #CED8BB; margin-top: 10px; margin-bottom: 10px; border-radius: 25px">
                            <img src="/storage/assets/items/{{$item->picture}}" style="height: 200px; width: 300px; object-fit: cover; border-radius: 25px">
                            <p style="margin: auto; font-size: 20px">{{$item->name}}</p>
                        </button>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="category" style="margin-bottom: 25px">
            <h2 style="margin-left: 55px" >Tablets</h2>
            <div class=grid id="main-grid">
                <div class=row>
                    @foreach ($tablets as $item)
                    <div class="col-3" style="margin-left: 55px; margin-right: 55px">
                        <a href="/item/{{$item->id}}">
                        <button class="btn btn-light active" type="button" style="background-color: #CED8BB; margin-top: 10px; margin-bottom: 10px; border-radius: 25px">
                            <img src="/storage/assets/items/{{$item->picture}}" style="height: 200px; width: 300px; object-fit: cover; border-radius: 25px">
                            <p style="margin: auto; font-size: 20px">{{$item->name}}</p>
                        </button>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="category" style="margin-bottom: 25px">
            <h2 style="margin-left: 55px" >Syrups</h2>
            <div class=grid id="main-grid">
                <div class=row>
                    @foreach ($syrups as $item)
                    <div class="col-3" style="margin-left: 55px; margin-right: 55px">
                        <a href="/item/{{$item->id}}">
                        <button class="btn btn-light active" type="button" style="background-color: #CED8BB; margin-top: 10px; margin-bottom: 10px; border-radius: 25px">
                            <img src="/storage/assets/items/{{$item->picture}}" style="height: 200px; width: 300px; object-fit: cover; border-radius: 25px">
                            <p style="margin: auto; font-size: 20px">{{$item->name}}</p>
                        </button>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="category" style="margin-bottom: 25px">
            <h2 style="margin-left: 55px" >Ointments</h2>
            <div class=grid id="main-grid">
                <div class=row>
                    @foreach ($ointments as $item)
                    <div class="col-3" style="margin-left: 55px; margin-right: 55px">
                        <a href="/item/{{$item->id}}">
                        <button class="btn btn-light active" type="button" style="background-color: #CED8BB; margin-top: 10px; margin-bottom: 10px; border-radius: 25px">
                            <img src="/storage/assets/items/{{$item->picture}}" style="height: 200px; width: 300px; object-fit: cover; border-radius: 25px">
                            <p style="margin: auto; font-size: 20px">{{$item->name}}</p>
                        </button>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="category" style="margin-bottom: 25px">
            <h2 style="margin-left: 55px" >Others</h2>
            <div class=grid id="main-grid">
                <div class=row>
                    @foreach ($others as $item)
                    <div class="col-3" style="margin-left: 55px; margin-right: 55px">
                        <a href="/item/{{$item->id}}">
                        <button class="btn btn-light active" type="button" style="background-color: #CED8BB; margin-top: 10px; margin-bottom: 10px; border-radius: 25px">
                            <img src="/storage/assets/items/{{$item->picture}}" style="height: 200px; width: 300px; object-fit: cover; border-radius: 25px">
                            <p style="margin: auto; font-size: 20px">{{$item->name}}</p>
                        </button>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
