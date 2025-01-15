<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    public $timestamp = false;

     // Связь с подгруппами
     public function children()
     {
         return $this->hasMany(Group::class, 'id_parent');
     }

      // Связь с родительской группой
    public function parent()
    {
        return $this->belongsTo(Group::class, 'id_parent');
    }

    // Связь с продуктами
    public function products()
    {
        return $this->hasMany(Product::class, 'group_id');
    }

    public function getAllSubgroupIds()
    {
        $subgroupIds = collect([$this->id]); // Сохраняем ID текущей группы

        foreach ($this->children as $child) {
            $subgroupIds = $subgroupIds->merge($child->getAllSubgroupIds());
        }

        return $subgroupIds;
    }

}
