<?php

namespace App\Http\Controllers;

use App\Models\CartItem;

class CartItemController extends Controller
{
    public function display()
    {
        $cart_items = CartItem::whereBelongsTo(auth()->user())->get();
        return view('cart', compact('cart_items'));
    }
}
