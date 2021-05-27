<?php

namespace App\Http\Controllers;

use App\Models\DetailInformation;
use App\Models\DetailPoint;
use App\Models\Information;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $news = Information::whereNewsSlug($slug)->first();
        $news->seen += 1;
        $news->save();
        if(Auth::check()) {
            $dtlPoint = DetailPoint::whereUsrId(Auth::user()->id)
                ->whereNewsId($news->id)
                ->first();
            if(!$dtlPoint){

                DetailPoint::create([
                    'usr_id' => Auth::user()->id,
                    'news_id' => $news->id,
                ]);
                $usr = User::whereId(Auth::user()->id)->first();
                $usr->point  += 250;
                $usr->save();
            }

        }
        $data ['data'] = DetailInformation::whereSlug($slug)
            ->join('information' , 'detail_information.id_info' , '=' , 'information.id' )
            ->join('categories' , 'information.cat_id' , '=' , 'categories.id')
            ->select(
                'information.thumb' , 'information.title' ,
                'detail_information.*', 'categories.cat_name',
                'detail_information.s&k as syarat', 'detail_information.description'
            )
            ->first();
        return view ('pages.promo.detail-promo', $data);
    }

}
