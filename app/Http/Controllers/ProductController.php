<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Price;
use App\Models\Product;

class ProductController extends Controller
{
    public function __invoke(Request $request)
    {
        //Получаем параметры сортировки из запроса если они есть 
        $sortBy = $request->get('sort_by');
        $sortDirection = $request->get('sort_direction');
        
        if ($sortBy && $sortDirection) {
            if ($sortBy == 'price' && $sortDirection== 'asc') {
            $products = Product::with('price') 
                ->orderBy(
                    Price::select('price') // Подзапрос для получения цены из связанной таблицы
                        ->whereColumn('products.id', 'prices.id_product'), // Соединяем таблицы
                    $sortDirection
                )
            ->paginate(6);
            }
            elseif ($sortBy == 'price' && $sortDirection== 'desc') {
                $products = Product::with('price')
                ->orderBy(
                    Price::select('price')
                    ->whereColumn('products.id', 'prices.id_product'),
                    $sortDirection
                )
                ->paginate(6);
            }
            elseif ($sortBy == 'name' && $sortDirection== 'asc') {
                $products = Product::orderBy($sortBy, $sortDirection) 
                ->paginate(6);
            }
            else {
                $products = Product::orderBy($sortBy, $sortDirection) 
                ->paginate(6);
            }
        }
        else{
            $products = Product::Paginate(6);
        }
        
        return view('products.product', compact('products'));
       
    }
}
