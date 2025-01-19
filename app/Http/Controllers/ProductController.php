<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Price;
use App\Models\Product;

class ProductController extends Controller
{
    public function __invoke()
    {
        $productWithPrice = Product::Paginate(6);
        return view('products.product', compact('productWithPrice'));
       
    }
}
