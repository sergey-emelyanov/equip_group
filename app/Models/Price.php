<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'prices';
    public $timestamp = false;

    public function product()
    {
        return $this-> belongsTo(Product::class,'id_product');
    }
}
