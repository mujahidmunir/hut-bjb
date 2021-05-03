<?php
namespace App\Helpers;

use App\Models\Category;
use App\Models\Information;
use Illuminate\Support\Facades\DB;

class Promo {
    public static function Promo(){
        return $promo = Information::whereParentId(33)->select('thumb', 'news_slug')
            ->orderBy(DB::raw('RAND()'))
            ->limit(12)
            ->get();
    }

    public static function AllPromo (){
        return $promo = Information::where('information.parent_id', 33)
            ->join('detail_information' , 'information.id' , '=' , 'detail_information.id_info')
            ->join('categories' , 'information.cat_id' , '=' , 'categories.id')
            ->select('detail_information.location','detail_information.duration_promo','thumb','title', 'news_slug', 'categories.cat_name')
            ->orderBy(DB::raw('RAND()'))
            ->get();
    }

    public static function Cat (){
        return Category::whereNotNull('parent_id')
            ->orderBy('cat_name' , 'ASC')
            ->get();
    }

    public static function City(){
        return $promo = Information::where('information.parent_id', 33)
            ->join('detail_information' , 'information.id' , '=' , 'detail_information.id_info')
            ->select('detail_information.location')
            ->groupBy('detail_information.location')
            ->orderBy('detail_information.location', 'ASC')
            ->get();
    }
}
