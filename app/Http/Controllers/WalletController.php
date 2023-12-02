<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        $balance = auth()->user()->balance;
        return view('wallet', compact('balance'));
    }

    public function topup_index()
    {
        return view('topup');
    }

    public function topup(Request $request)
    {
        auth()->user()->balance += $request->amount;
        auth()->user()->save();
        return redirect('/wallet');
    }
}
