<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Price;
use App\Models\Product;

class ShowController extends Controller
{
    public function __invoke(Product $product)
    {
        return view('products.show', compact('product'));
       
    }
}
