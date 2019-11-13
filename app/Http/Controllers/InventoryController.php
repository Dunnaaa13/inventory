<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
    	$inventory = Inventory::all();
    	return view('inventory.index')->with('inventory', $inventory);
    }

    public function create()
    {
    	return view('inventory.create');
    }

    public function store()
    {
        request()->validate([
            'id' => 'required',
            'name' => 'required',
            'quantity' => 'required',
            'category' => 'required'
        ]);

        $inventory = Inventory::create([
            'id' => request()->id,
            'name' => request()->name,
            'quantity' => request()->quantity,
            'category' => request()->category
        ]);

    	return redirect('/inventory');
    }
    
    public function show(Inventory $inventory)
    {
    	return view('inventory.show')->with('inventory', $inventory);
    }
    
    public function edit(Inventory $inventory)
    {
        return view('inventory.edit')->with('inventory', $inventory);
    }

    public function update(Inventory $inventory)
    {
        $inventory->id = request()->id;
        $inventory->name = request()->name;
        $inventory->quantity = request()->quantity;
        $inventory->category = request()->category;
        $inventory->save();
        return redirect('/inventory');
    }
}
