<?php
namespace App\Helpers;

use App\Models\Category;
use App\Models\Information;
use Illuminate\Support\Facades\DB;

class Program {
    public static  function Program(){
        return Information::whereParentId(32)
            ->select('id' , 'title' , 'thumb', 'news_slug', 'thumb_desc')
            ->orderBy(DB::raw('RAND()'))
            ->get();
    }

    public static function MoreProgram(){
        return Information::whereParentId(32)
            ->select('id' , 'title' , 'thumb', 'news_slug', 'thumb_desc')
            ->orderBy(DB::raw('RAND()'))
            ->limit(8)
            ->get();
    }
}
