<?php

namespace App\Http\Controllers;

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

}
