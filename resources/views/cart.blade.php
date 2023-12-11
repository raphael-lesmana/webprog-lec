@extends('include.navbar')
@section('content')
<h1>My cart</h1>

@if (sizeof($cart_items) == 0)
    <img src="http://memegen.link/custom/No%20Items%3F.jpg?alt=https://i.imgflip.com/6aoqqy.jpg" width="500px" style="margin: 20px 430px">
@else
<table class="table table-bordered mb-5" style="border-color:#CED9BB; ">
    <thead class="table" style="background-color: #CED9BB">
        <tr class="table" style="background-color: #CED9BB; text-align: center; color: black; border-color:#CED9BB">
            <th scope="col">Item Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cart_items as $cart_item)
        <tr class="align-middle" style="background-color: white; color: black; text-align: center; font-weight: bold">
            <td>{{ $cart_item->item->name }}</td>
            <td>{{ $cart_item->item->price }}</td>
            <td><form action="/cart" method="POST">
                @csrf
                <input type="hidden" name="item_id" value={{$cart_item->item->id}}>
                <button class ="minus" name="action_type" value="dec" style="color: white; background-color: #528286">-</button>
                {{ $cart_item->qty }}
                <button class ="plus" name="action_type" value="inc" style="color: white; background-color: #528286">+</button>
            </form></td>
            <td>{{ $cart_item->item->price * $cart_item->qty }}</td>
            <td><form action="/cart" method="POST">
                @csrf
                <input type="hidden" name="action_type" value="delete">
                <input type="hidden" name="remove_id" value={{$cart_item->item->id}}>
                <button type="submit" class="btn btn-secondary" style="background-color: #528286">Remove</button></form></td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="text-end">
    <span style="text-align: right; color: black; font-size: 30px; font-weight: bold">Total Price: Rp {{ $total }}</span>
    <br>
    <a href="/checkout">
        <button class="btn btn-secondary mt-2" style="background-color: #528286">Checkout</button>
    </a>
</div>
@endif


@endsection