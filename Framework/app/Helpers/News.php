<?php
namespace App\Helpers;

use App\Models\DetailInformation;
use App\Models\Information;

class News {
    public static function Webminar (){
        return DetailInformation::join('information' , 'detail_information.id_info' , '=' , 'information.id')
            ->whereParentId(94)
            ->orderBy('information.id' , 'DESC')
            ->get();
    }

    public static  function EBook(){
        return DetailInformation::join('information' , 'detail_information.id_info' , '=' , 'information.id')
            ->whereParentId(96)
            ->orderBy('information.id' , 'DESC')
            ->get();
    }
}
