<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $capsules = Item::where('type', 'Capsule')->get();
        $tablets = Item::where('type', 'Tablet')->get();
        $syrups = Item::where('type', 'Syrup')->get();
        $ointments = Item::where('type', 'Ointment')->get();
        $others = Item::where('type', 'Other')->get();
        return view('index', compact('capsules', 'tablets', 'syrups', 'ointments', 'others'));
    }
}
