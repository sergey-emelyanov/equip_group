<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Price;
use App\Models\Product;

class MainController extends Controller
{
    public function index()
    {
        // Получаем группы первого уровня с их подгруппами
        $groups = Group::where('id_parent', 0)->with('children')->get();

        // Формируем данные для передачи во view
        $groupsData = $groups->map(function ($group) {
            $allGroupIds = $group->getAllSubgroupIds(); // Получаем ID всех подгрупп
            $productCount = Product::whereIn('id_group', $allGroupIds)->count(); // Считаем товары
            return [
                'name' => $group->name,
                'productCount' => $productCount,
            ];
        });
        // Передаём данные во view
        return view('groups.index', ['groups' => $groupsData]);
    }
}
