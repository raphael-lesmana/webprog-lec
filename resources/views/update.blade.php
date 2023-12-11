@extends ('include.navbar')

@section('title', 'Update Item | Mediklik')

@section('content')

@include('include.error')

<div>
    <h1 class="text-center">Update Item</h1>
    <form action="{{ Request::url() }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="name" class="form-label" style="font-size: 20px">Item Name</label>
            <input type="text" class="form-control" name="name" placeholder="Mininum 5 Characters" value="{{$item->name}}">
        </div>

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="description" class="form-label" style="font-size: 20px">Description</label>
            <textarea type="text" class="form-control" name="description" placeholder="Maximum 255 characters">{{$item->description}}</textarea>
        </div>

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="type" class="form-label" style="font-size: 20px">Category</label>
            <br>
            <select class="mx-auto" name="type" style="font-size: 20px; width: 100%; height: 35px">
                <option value="Capsule"
                @if ($item->type == "Capsule")
                    selected
                @endif
                >Capsule</option>
                <option value="Tablet"
                @if ($item->type == "Tablet")
                    selected
                @endif>
                Tablet</option>
                <option value="Syrup" 
                @if ($item->type == "Syrup")
                    selected
                @endif>Syrup</option>
                <option value="Ointment" 
                @if ($item->type == "Ointment")
                    selected
                @endif>Ointment</option>
                <option value="Other" 
                @if ($item->type == "Other")
                    selected
                @endif>Other</option>
            </select>
        </div>

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="price" class="form-label" style="font-size: 20px">Price</label>
            <input type="number" class="form-control" name="price" value="{{$item->price}}">
        </div>

        <div class="mb-3 mx-auto">
            <label for="picture" class="form-label" style="font-size: 20px">Image File</label>
            <input class="form-control" type="file" id="picture" name="picture" value="{{ $item->picture }}">
        </div>

        <div class="col-12 text-end mb-4" style="text-align: right">
            <button type="submit" class="btn" style="color:black; background-color: #CED8BB">Update</button>
        </div>
    </form>
</div>

@endsection