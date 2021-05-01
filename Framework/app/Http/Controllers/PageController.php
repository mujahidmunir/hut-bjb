<?php

namespace App\Http\Controllers;

use App\Models\DetailPoint;
use App\Models\Information;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;


class PageController extends Controller
{
    public function Index(){
        $data ['agent'] = new Agent();
        $data ['news'] = Information::limit(8)->get();
        return view ('index', $data);
    }

    public function AllEvents(){
        return view ('pages.events.events');
    }

    public function News(){
        $data ['news'] = Information::whereParentId(1)->orderBy('updated_at' , 'DESC')->paginate(20);
        return view ('pages.news.news', $data);
    }

    public function DetailEvent($slug){
        return  view ('pages.events.detail-event');

    }

    public function DetailNew($slug){
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
        $data ['data'] = Information::whereNewsSlug($slug)
            ->join('detail_information' , 'information.id' , '=' , 'detail_information.id_info')
            ->select(
                'information.title', 'information.news_slug','information.updated_at','information.thumb','information.updated_at',
                'detail_information.description', 'detail_information.video_url'
            )

            ->first();
        return  view ('pages.news.detail-new', $data);

    }
    public function slider(){
        return view('slider');
    }

    public function asdf(){
        $news = Information::select('thumb', 'id')->get();

        foreach ($news as $data){
           Information::whereId($data->id)->update([
               'thumb' => Str::lower($data->thumb)
           ]);
        }
    }


}
