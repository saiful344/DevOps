<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "product";
    protected $fillable = ["price","name","id_cashier","id_category"];

    public function cashier()
    {
    	return $this->belongsToMany(cashier::class);
    }

    public function category()
    {
    	return $this->belongsToMany(category::class);
    }
}
