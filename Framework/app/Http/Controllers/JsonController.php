<?php

namespace App\Http\Controllers;

use App\Helpers\Promo;
use App\Models\Category;
use App\Models\City;
use App\Models\DetailInformation;
use App\Models\Information;
use App\Models\User;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;

class JsonController extends Controller
{
    //categories
    public function CatParent(){
        $cat = Category::whereParentId(null)->orderBy('cat_name', 'ASC')->get();
        return response()->json($cat);
    }

    public function NewsCategories($id = null){
        if($id == null){
            $cat = Category::whereParentId(1)->get();
        } else {
            $cat = Category::whereParentId($id)->orderBy('cat_name', 'ASC')->get();
        }

        return response()->json($cat);
    }
    public function CatStore(Request $request){
        $ParentID = $request->input('ParentID');
        $cat = Category::whereCatSlug(Str::slug($request->input('cat_name')))->first();
        if($cat){
            $msg = 'failed';
            return response()->json($msg);
        }
        $createCat = new Category();
        $createCat->cat_name = $request->input('cat_name');
        $createCat->cat_slug = Str::slug($request->input('cat_name'));
            if($ParentID == !0){
                $createCat->parent_id = $ParentID;
                $type = 'categories';
            } else {
                $type = 'parent';
            }
        $createCat->save();
        $msg = 'success';
            $data = [
                'msg' => $msg,
                'type' => $type,
            ];
        return response()->json([$data, $createCat]);
    }


    public function CreateNews(Request $request){
        $title = $request->input('title');
        $thumb_desc = Str::limit($request->input('description'), 100);
        $slug = Str::limit($title, 30);
        $cek = Information::whereNewsSlug(Str::slug($title))->first();
        if($cek){
            $msg = '<strong>Gagal</strong>'. ', Judul Berita Sudah Tersedia';
        } else {
            $parentId = Category::whereId($request->input('cat_id'))->first();
            $img = $request->file('img');
            $file_name = now()->timestamp.'.png';
            $icon = $request->file('img_icon');
            $file_name_icon = now()->timestamp.'.png';


            //image thumb
            $img = ImageManagerStatic::make($img);
            $upload_img = $img->resize(null, 700, function ($constraint) {
                $constraint->aspectRatio();
            });
            $upload_img->save(public_path("images/news/origin/{$file_name}"), 80, 'png');

            $img = ImageManagerStatic::make($img);
            $upload_img = $img->resize(null, 300, function ($constraint) {
                $constraint->aspectRatio();
            });
            $upload_img->save(public_path("images/news/thumb/{$file_name}"), 80, 'png');

            //information
            if($request->input('media') == true){
                $video_url = $request->input('video_url');
                $media = 1;
            } else {
                $video_url = null;
                $media = 0;
            }

            if($request->file('img_icon')){
                $img_icon = ImageManagerStatic::make($icon);
                $upload_img_icon = $img_icon->resize(null, 272, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $upload_img_icon->save(public_path("images/news/icon/{$file_name_icon}"), 80, 'png');

                $NameIcon = $file_name_icon;
            } else {
                $NameIcon = null;
            }

            $create = Information::create([
                'title' => $request->input('title'),
                'thumb_desc' => $thumb_desc,
                'thumb' => $file_name,
                'cat_id' => $request->input('cat_id'),
                'parent_id' => $parentId->parent_id,
                'news_slug' => Str::slug($slug),
                'media' => $media,
                'icon' => $NameIcon
            ]);
            if($request->input('duration')){
                $durasi = $request->input('duration');
            } else {
                $durasi = '';
            }
            //detail information
            DetailInformation::create([
                'id_info' => $create->id,
                'description' => $request->input('description'),
                'slug' => Str::slug($slug),
                'video_url' => $video_url,
                'duration_promo' => $durasi
            ]);

            //update media Information

            $msg = '<strong>Berhasil</strong>'. ', Berita'.' '.$request->input('title').' Berhasil Dibuat';
        }

        return response()->json($msg);
    }

    public function Load(){
        \Cache::forget('my_users');
        $user = \Cache::remember('my_users', now()->addMinutes(5), function () {
            return User::join('cities' , 'users.city_id', '=' , 'cities.id')
                ->select('users.*' , 'cities.city_name')
                ->get();
//                ->map(function ($user) {
//                    $user->nik = substr($user->nik, 0, 8);
//                    $user->nik2 = substr($user->nik, 8, 8);
//                    return $user;
//                });
        });
        return response()->json($user);
    }
    public function test(){
        $data ['cat'] = Category::all();
        return view ('test', $data);
    }
    public function Add(Request $request){
        $title = $request->input('title');
        $cek = Information::whereNewsSlug(Str::slug($title))->first();
        if($cek){
            return 'data sudah ada';

        } else {
            $img = $request->file('img');
            $file_name = now()->timestamp.'.png';

            $img = ImageManagerStatic::make($img);
            $upload_img = $img->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });
            $upload_img->save(public_path("images/news/thumb/{$file_name}"), 80, 'png');

            $create = Information::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'thumb' => $file_name,
                'cat_id' => $request->input('cat_id'),
                'parent_id' => 1,
                'news_slug' => Str::slug($title)
            ]);
            return 'berhasil';
        }

    }

    public function City(Request $request){
        if($request->get('city')){
            $data = City::where('city_name', 'like' , '%' . $request->get('city'). '%')->get();
            $output = '<ul class="dropdown-menu" style="display:block; position: relative; width: 100%"> ';
            foreach ($data as $row){
                $output .= '<a href="#" onmouseover="on(this)" onmouseout="off(this)"><li class="m-3 city_name">' .$row->city_name . '</li></a>';
            }
            $output .='</ul>';
            echo $output;
        }
    }

    public function GetUrl($id, $NewsId){
        $news = Information::whereId($NewsId)->select('information.url_origin')
            ->first();
        return response()->json($news);
    }

    public function Query(){
        User::where('id' , '>' , 10)->get();
    }

    public function GetPromoAll()
    {
        $promo = Information::where('information.parent_id', 33)
            ->join('detail_information', 'information.id', '=', 'detail_information.id_info')
            ->join('categories', 'information.cat_id', '=', 'categories.id')
            ->select('detail_information.location', 'detail_information.duration_promo', 'thumb', 'title', 'news_slug', 'categories.cat_name')
            ->orderBy(DB::raw('RAND()'))
            ->get();
        return response()->json($promo);
    }

    public function GetProgramAll()
    {
        $promo = Information::where('information.parent_id', 32)
            ->join('detail_information', 'information.id', '=', 'detail_information.id_info')
            ->join('categories', 'information.cat_id', '=', 'categories.id')
            ->select('detail_information.location', 'detail_information.duration_promo', 'thumb', 'title', 'news_slug', 'categories.cat_name')
            ->orderBy(DB::raw('RAND()'))
            ->get();
        return response()->json($promo);
    }



    public function getCity(){
        $city = Promo::City();
        return response()->json($city);
    }

    public function getCategories(){
        $cat =  Promo::Cat();
        return response()->json($cat);
    }

    private function Promo (){
         return Information::where('information.parent_id', 33)
            ->join('detail_information', 'information.id', '=', 'detail_information.id_info')
            ->join('categories', 'information.cat_id', '=', 'categories.id')
            ->select('detail_information.location', 'detail_information.duration_promo', 'thumb', 'title', 'news_slug', 'categories.cat_name');
    }
    public function Search(Request $request){
        $cat = $request->input('category');
        $city = $request->input('city');
        $query = $this->Promo();
        if($cat == null && $city == null){
            $query;
        }
        if($cat == !null){
            $query = $query->where('information.cat_id', $cat );
        }

        if($city == !null){
            $query = $query->where('detail_information.location', $city );
        }
        $count = $query->count();
        $data = $query->orderBy(DB::raw('RAND()'))->get();
        return response()->json([$data, $count]);
    }

    public function getDashboard(){
        $data ['news'] = Information::whereParentId(1)->count();
        $data ['program'] = Information::whereParentId(32)->count();
        $data ['promo'] = Information::whereParentId(33)->count();
        $data ['total_visitor'] = Visitor::count();
        $data ['today_visitor'] = Visitor::whereDate('created_at', Carbon::today())->count();
        return response()->json($data);
    }

}
