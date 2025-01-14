<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Price;
use App\Models\Product;

class MainController extends Controller
{
    public function index() {
        $pr = Price::find(101);
        return $pr->price;
    }
}
