<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Price;
use App\Models\Product;

class MainController extends Controller
{
    public function index() {
        $groups = Group::with(['children', 'products'])
        ->where('id_parent', 0)
        ->get()
        ->map(function ($group) {
            $productCount = $group->products->count();
            foreach ($group->children as $child) {
                $productCount += $child->products->count();
            }
            return [
                'name' => $group->name,
                'product_count' => $productCount,
            ];
        });

    return view('groups.index', compact('groups'));
    }
}
