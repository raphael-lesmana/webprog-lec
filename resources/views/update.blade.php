@extends ('include.navbar')
@section('title', 'Update Item | Mediklik')

@section('content')
<h1>Update Item</h1>
<form action="{{ Request::url() }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <label for="name">Item name</label>
    <input type="text" name="name" placeholder="" value="{{$item->name}}"><br>
    <label for="brief_description">Brief description</label>
    <textarea name="brief_description" placeholder="">{{$item->brief_description}}</textarea><br>
    <label for="brief_description">Full description</label>
    <textarea name="full_description" placeholder="">{{$item->full_description}}</textarea><br>
    <label for="brief_description">Category</label>
    <select name="type">
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
    </select><br>
    <label for="brief_description">Price</label>
    <input type="number" name="price" value="{{$item->price}}"><br>
    <label for="picture">Image file</label>
    <input type="file" name="picture"><br>
    <button>Update</button>
</form>
@endsection