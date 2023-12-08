@extends('include.navbar')

@section('title', 'Homepage | Mediklik')

@section('content')
    <div style="margin-left: 100px; margin-right: 100px">
        <h1 style="margin-top: 25px; margin-bottom: 25px">Welcome to Mediklik</h1>
        <div class="category" style="margin-bottom: 25px">
            <h2>Capsules</h2>
            <div class=grid id="main-grid">
                <div class=row>
                    @foreach ($capsules as $item)
                    <div class="col-4" style="margin-left: 10px; margin-right: 10px">
                        <a href="/item/{{$item->id}}">
                        <button class="btn btn-light active" type="button" style="background-color: #CED9BB; margin-top: 10px; margin-bottom: 10px; border-radius: 25px">
                            <img src="/storage/assets/{{$item->picture}}" style="height: 200px; width: 300px; object-fit: cover; border-radius: 25px">
                            <p style="margin: auto; font-size: 20px">{{$item->name}}</p>
                        </button>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="category" style="margin-bottom: 25px">
            <h2>Tablets</h2>
            <div class=grid id="main-grid">
                <div class=row>
                    @foreach ($tablets as $item)
                    <div class="col-4" style="margin-left: 10px; margin-right: 10px">
                        <a href="/item/{{$item->id}}">
                        <button class="btn btn-light active" type="button" style="background-color: #CED9BB; margin-top: 10px; margin-bottom: 10px; border-radius: 25px">
                            <img src="/storage/assets/{{$item->picture}}" style="height: 200px; width: 300px; object-fit: cover; border-radius: 25px">
                            <p style="margin: auto; font-size: 20px">{{$item->name}}</p>
                        </button>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="category" style="margin-bottom: 25px">
            <h2>Syrups</h2>
            <div class=grid id="main-grid">
                <div class=row>
                    @foreach ($syrups as $item)
                    <div class="col-4" style="margin-left: 10px; margin-right: 10px">
                        <a href="/item/{{$item->id}}">
                        <button class="btn btn-light active" type="button" style="background-color: #CED9BB; margin-top: 10px; margin-bottom: 10px; border-radius: 25px">
                            <img src="/storage/assets/{{$item->picture}}" style="height: 200px; width: 300px; object-fit: cover; border-radius: 25px">
                            <p style="margin: auto; font-size: 20px">{{$item->name}}</p>
                        </button>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="category" style="margin-bottom: 25px">
            <h2>Ointments</h2>
            <div class=grid id="main-grid">
                <div class=row>
                    @foreach ($ointments as $item)
                    <div class="col-4" style="margin-left: 10px; margin-right: 10px">
                        <a href="/item/{{$item->id}}">
                        <button class="btn btn-light active" type="button" style="background-color: #CED9BB; margin-top: 10px; margin-bottom: 10px; border-radius: 25px">
                            <img src="/storage/assets/{{$item->picture}}" style="height: 200px; width: 300px; object-fit: cover; border-radius: 25px">
                            <p style="margin: auto; font-size: 20px">{{$item->name}}</p>
                        </button>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="category" style="margin-bottom: 25px">
            <h2>Others</h2>
            <div class=grid id="main-grid">
                <div class=row>
                    @foreach ($others as $item)
                    <div class="col-4" style="margin-left: 10px; margin-right: 10px">
                        <a href="/item/{{$item->id}}">
                        <button class="btn btn-light active" type="button" style="background-color: #CED9BB; margin-top: 10px; margin-bottom: 10px; border-radius: 25px">
                            <img src="/storage/assets/{{$item->picture}}" style="height: 200px; width: 300px; object-fit: cover; border-radius: 25px">
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
