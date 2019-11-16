<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::first();
        $items = Items::all();
        return view('items.index', compact('items', 'inventory'));
    }

    public function create(Inventory $inventory)
    {
        $inventory = Inventory::first();
        $items = Task::all();
        return view('items.create', compact('items', 'project'));
    }

    public function store(Inventory $inventory)
    {
        $item = $inventory->items()->create([
            'id' => request()->id,
            'name' => request()->name,
            'quantity' => request()->quantity,
            'category' => request()->category
        ]);
        return $item;
    }

    public function delete(Item $item)
    {
        //delete the task
        $item->delete();
        return "Item was deleted successfully";
    }   
}
