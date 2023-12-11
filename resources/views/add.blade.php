@extends('include.navbar')
@section('title', 'Add Item | Mediklik')
@section('content')
@include('include.error')
    
<h1>Add Item</h1>

<form action="/add" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="name" class="form-label" style="color: black; font-size: 20px">Item Name</label>
        <input type="text" class="form-control" name="name" placeholder="Min 5 Characters">
    </div>

    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="description" class="form-label" style="color: black; font-size: 20px">Description</label>
        <textarea type="text" class="form-control" name="description" placeholder="Maximum 255 Characters"></textarea>
    </div>

    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="type" class="form-label" style="color: black; font-size: 20px">Category</label>
        <br>
        <select class="mx-auto" name="type" style="font-size: 20px; width: 100%; height: 35px">
            <option value="Capsule">Capsule</option>
            <option value="Tablet">Tablet</option>
            <option value="Syrup">Syrup</option>
            <option value="Ointment">Ointment</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="price" class="form-label" style="color: black; font-size: 20px">Price</label>
        <input type="number" class="form-control" name="price" placeholder="Must be more than 0">
    </div>

    <div class="mb-3">
        <label for="picture" class="form-label" style="color: black; font-size: 20px">Image File</label>
        <input class="form-control" type="file" id="picture" name="picture">
    </div>

    <div class="col-12 text-end mb-4" style="text-align: right">
        <button type="submit" class="btn" style="color: white; background-color: #528286">Cancel</button>
        <button type="submit" class="btn" style="color: white; background-color: #528286">Save</button>
    </div>
</form>
@endsection