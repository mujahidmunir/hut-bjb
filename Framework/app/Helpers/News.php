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
}
