@extends('include.navbar')
@section('title', 'Add Item | Mediklik')
@section('content')
    
<h1>Add Item</h1>

<form action="/add" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="name" class="form-label" style="color: black; font-size: 20px">
            <div class="card text-black" style="background-color: #CED8BB">Item Name</div>
        </label>
        <input type="text" class="form-control" name="name" placeholder="Min 5 Characters">
    </div>

    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="brief_description" class="form-label" style="color: black; font-size: 20px">
            <div class="card text-black" style="background-color: #CED8BB">Brief Description</div>
        </label>
        <textarea type="text" class="form-control" name="brief_description" placeholder="Maximum 100 Characters"></textarea>
    </div>

    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="full_description" class="form-label" style="color: black; font-size: 20px">
            <div class="card text-black" style="background-color: #CED8BB">Full Description</div>
        </label>
        <textarea type="text" class="form-control" name="full_description" placeholder="Maximum 255 Characters"></textarea>
    </div>

    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="category" class="form-label" style="color: black; font-size: 20px">
            <div class="card text-black" style="background-color: #CED8BB">Category</div>
        </label><br>
        <select class="mx-auto" name="type" style="font-size: 20px; width: 100%; height: 35px">
            <option value="Capsule">Capsule</option>
            <option value="Tablet">Tablet</option>
            <option value="Syrup">Syrup</option>
            <option value="Ointment">Ointment</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="price" class="form-label" style="color: black; font-size: 20px">
            <div class="card text-black" style="background-color: #CED8BB">Price</div>
        </label>
        <input type="number" class="form-control" name="price" placeholder="Must be more than 0">
    </div>

    <div class="mb-3">
        <label for="picture" class="form-label" style="color: black; font-size: 20px">
            <div class="card text-black" style="background-color: #CED8BB">Image File</div>
        </label>
        <input class="form-control" type="file" id="picture" name="picture">
    </div>

    <div style="text-align: right">
        <button type="submit" class="btn" style="color:black; background-color: #CED8BB">Cancel</button>
        <button type="submit" class="btn" style="color:black; background-color: #CED8BB">Save</button>
    </div>
</form>
@endsection