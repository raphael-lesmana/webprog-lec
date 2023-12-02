<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function checkout(Request $request)
    {
        $header = auth()->user()->transaction_header()->create();
        $cart = CartItem::whereBelongsTo(auth()->user());
        $cart_items = $cart->get();
        $total = 0;
        foreach ($cart_items as $cart_item)
        {
            $total += $cart_item->qty * $cart_item->item->price;
            if ($total > auth()->user()->balance)
                return back();
        }
        unset($cart_item);
        foreach ($cart_items as $cart_item)
        {
            $cart_item->item->transaction_detail()->create([
                'transaction_header_id' => $header->id,
                'qty' => $cart_item->qty,
            ]);
        }
        auth()->user()->balance -= $total;
        auth()->user()->save();
        $cart->delete();
        return view('success');
    }
}
