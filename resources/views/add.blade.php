<h1>Add New Food</h1>
<form action="/add" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Food name</label>
    <input type="text" name="name" placeholder="Minimum 5 characters"><br>
    <label for="brief_description">Brief description</label>
    <textarea name="brief_description" placeholder="Maximum 100 characters"></textarea><br>
    <label for="brief_description">Full description</label>
    <textarea name="full_description" placeholder="Maximum 255 characters"></textarea><br>
    <label for="brief_description">Category</label>
    <select name="type">
        <option value="main">Main dish</option>
        <option value="beverage">Beverage</option>
        <option value="dessert">Dessert</option>
    </select><br>
    <label for="brief_description">Price</label>
    <input type="number" name="price"><br>
    <label for="picture">Image file</label>
    <input type="file" name="picture"><br>
    <button>Add</button>
</form>