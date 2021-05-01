<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Information;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function Index(){

        return view ('admin.news.news');
    }
    public function Create(){
        return view ('admin.news.create');
    }
    public function Store(){

    }
    public function Update($id){

    }

    public function Test(){
        for ($i = 1; $i  < 10; $i++ ){
           if($i % 2){
               echo $i . ',' ;
           }
        }
    }
}
