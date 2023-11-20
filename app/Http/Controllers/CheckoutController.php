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
        // $request->validate([
        //     'full_name' => 'required|min:5',
        //     'phone' => 'required|digits:12',
        //     'address' => 'required|min:5',
        //     'city' => 'required|min:5',
        //     'card_name' => 'required|min:3',
        //     'card_number' => 'required|min:16',
        //     'country' => 'required',
        //     'zip' => 'required|numeric'
        // ]);

        $header = auth()->user()->transaction_header()->create();
        $cart = CartItem::whereBelongsTo(auth()->user());
        $cart_items = $cart->get();
        foreach ($cart_items as $cart_item)
        {
            $cart_item->item->transaction_detail()->create([
                'transaction_header_id' => $header->id,
                'qty' => $cart_item->qty,
            ]);
        }
        $cart->delete();
        return view('success');
    }
}
