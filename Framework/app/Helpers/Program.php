<?php
namespace App\Helpers;

use App\Models\Category;
use App\Models\Information;

class Program {
    public static  function Program(){
        return Category::whereParentId(32)
            ->select('id' , 'cat_title' , 'cat_thumb', 'cat_slug')
            ->get();
    }
}
