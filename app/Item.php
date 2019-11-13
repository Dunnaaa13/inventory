<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function inventory()
    {
    	return $this->belongsTo(Inventory::class);
    }
}
