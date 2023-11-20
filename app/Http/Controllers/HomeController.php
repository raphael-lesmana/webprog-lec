<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $main_dishes = Item::where('type', 'main')->get();
        $beverages = Item::where('type', 'beverage')->get();
        $desserts = Item::where('type', 'dessert')->get();
        return view('index', compact('main_dishes', 'beverages', 'desserts'));
    }
}
