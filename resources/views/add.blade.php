@extends('include.navbar')
@section('title', 'Add Item | Mediklik')
@section('content')
    
<h1>Add Item</h1>
<form action="/add" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Item name</label>
    <input type="text" name="name" placeholder=""><br>
    <label for="brief_description">Brief description</label>
    <textarea name="brief_description" placeholder=""></textarea><br>
    <label for="brief_description">Full description</label>
    <textarea name="full_description" placeholder=""></textarea><br>
    <label for="brief_description">Category</label>
    <select name="type">
        <option value="Capsule">Capsule</option>
        <option value="Tablet">Tablet</option>
        <option value="Syrup">Syrup</option>
        <option value="Ointment">Ointment</option>
        <option value="Other">Other</option>
    </select><br>
    <label for="brief_description">Price</label>
    <input type="number" name="price"><br>
    <label for="picture">Image file</label>
    <input type="file" name="picture"><br>
    <button>Add</button>
</form>
@endsection