<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class JsonAdminController extends Controller
{
    private function GetData ($id){
        return Information::where('information.parent_id' , $id)
            ->join('detail_information' , 'information.id' , '=' , 'detail_information.id_info')
            ->join('categories' , 'information.cat_id' , '=' , 'categories.id')
            ->select(
                'categories.cat_name',
                'information.title', 'information.seen',
                'detail_information.location','detail_information.cabang','detail_information.pic_name',
                'detail_information.no_wa'
            )
            ->get();
    }
    public function GetNews(){
        $data = $this->GetData(1);
        return response()->json($data);
    }
    public function GetPromo(){
        $data = $this->GetData(33);
        return response()->json($data);
    }
    public function GetProgram(){
        $data = $this->GetData(32);
        return response()->json($data);
    }

    public function GetInfoAll(){
        $data = Information::join('detail_information' , 'information.id' , '=' , 'detail_information.id_info')
            ->join('categories' , 'information.cat_id' , '=' , 'categories.id')
            ->select(
                'categories.cat_name',
                'information.title', 'information.seen',
                'detail_information.location','detail_information.cabang','detail_information.pic_name',
                'detail_information.no_wa'
            )
            ->get();
        return response()->json($data);
    }
}
