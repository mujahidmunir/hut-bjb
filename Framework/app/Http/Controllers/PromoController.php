<?php

namespace App\Http\Controllers;

use App\Models\DetailInformation;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function ViewAll(){
        return view ('admin.promo.promo');
    }
    public function Create(){
        return view ('admin.promo.create-promo');
    }

    public function PromoAll(){
        return view ('/pages/promo/view-all');
    }

    public function Search(){
        return 'asdf';
    }

    public function Detail($slug){
        $data ['data'] = DetailInformation::whereSlug($slug)
            ->join('information' , 'detail_information.id_info' , '=' , 'information.id' )
            ->join('categories' , 'information.cat_id' , '=' , 'categories.id')
            ->select(
                'information.thumb' , 'information.title' ,
                'detail_information.*', 'categories.cat_name',
                'detail_information.s&k as syarat'
            )
            ->first();
        return view ('pages.promo.detail-promo', $data);
    }

}
