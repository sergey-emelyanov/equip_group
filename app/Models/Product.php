<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamp = false;

    protected $fillable = ['name', 'id_group'];

    // Связь с группами
    public function group()
    {
        return $this->belongsTo(Group::class, 'id_group');
    }
    
    // Связь с ценой
    public function price()
    {
        return $this->hasOne(Price::class,'id_product');
    }
}
