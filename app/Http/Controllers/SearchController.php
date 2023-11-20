<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if (empty($request->all()))
            return view('search');
        else
            return $this->search($request);
    }

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);

        $category = [$request];

        $products = Item::where("name", "LIKE", "%$request->search%")->get();
        return view('searchresults', compact('products'));
    }
}
