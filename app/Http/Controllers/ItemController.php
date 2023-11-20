<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ItemController extends Controller
{
    public function add_index(Request $request)
    {
        if (!Gate::allows('admin'))
            abort(403);

        return view('add');
    }

    public function detail($id)
    {
        $item = Item::find($id);
        if (isset($item))
            return view('details', compact('item'));
        else
            abort(404);
    }

    public function order($id)
    {
        $item = Item::find($id);
        if (!isset($item))
            abort(404);

        auth()->user()->cart_item()->create([
            'item_id' => $id,
            'qty' => 1,
        ]);
        return back();
    }

    public function add(Request $request)
    {
        if (!Gate::allows('admin'))
            abort(403);
        $request->validate([
            'name' => 'required|min:5',
            'brief_description' => 'required|max:100',
            'full_description' => 'required|max:255',
            'type' => 'required',
            'price' => 'required|gt:0',
            'picture' => 'required|mimes:jpeg,png,jpg',
        ]);

        $filename = time() . "_" . $request->file('picture')->getClientOriginalName();
        $request->file('picture')->storeAs('/assets/items/', $filename, 'public');

        $item = new Item;
        $item->name = $request->name;
        $item->brief_description = $request->brief_description;
        $item->full_description = $request->full_description;
        $item->type  = $request->type;
        $item->price = $request->price;
        $item->picture = $filename;
        $item->save();
        return back();
    }

    public function manage_index(Request $request)
    {
        if (empty($request->all()))
        {
            if (Gate::allows('admin'))
                return view('manage');
            else
                abort(403);
        }
        else
            return $this->manage_search($request);
    }

    public function manage_search(Request $request)
    {
        if (!Gate::allows('admin'))
            abort(403);

        $request->validate([
            'search' => 'required'
        ]);

        $category = [$request];

        $products = Item::where("name", "LIKE", "%$request->search%")->get();
        return view('manageresults', compact('products'));
    }

    public function delete(Request $request)
    {
        $request->validate([
            'delete' => 'required'
        ]);

        $item = Item::find($request->delete);
        if (!isset($item))
            abort(403);
    
        $item->delete();
        return back();
    }

    public function update_index($id)
    {
        if (!Gate::allows('admin'))
            abort(403);
        $item = Item::find($id);
        if (!isset($item))
            abort(404);
        return view('update', compact('item'));
    }

    public function update($id, Request $request)
    {
        if (!Gate::allows('admin'))
            abort(403);

        $request->validate([
            'name' => 'required|min:5',
            'brief_description' => 'required|max:100',
            'full_description' => 'required|max:255',
            'type' => 'required',
            'price' => 'required|gt:0',
            //'picture' => 'required|mimes:jpeg,png,jpg',
        ]);
        
        $item = Item::find($id);
        if (!isset($item))
            abort(404);
        
        $item->name = $request->name;
        $item->brief_description = $request->brief_description;
        $item->full_description = $request->full_description;
        $item->type  = $request->type;
        $item->price = $request->price;
        //$item->picture = $filename;
        $item->save();
        return back();
    }
}
