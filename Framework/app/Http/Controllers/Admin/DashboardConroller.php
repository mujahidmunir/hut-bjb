<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardConroller extends Controller
{
    public function Index(){
        return view('admin.dashboard');
    }

    public function ListNews(){
        return view ('admin.view.news');
    }
    public function ListPromo(){
        return view ('admin.view.promo');
    }
    public function ListProgram(){
        return view ('admin.view.program');
    }
    public function ListAll(){
        return view ('admin.view.view-all');
    }

    public function Users(){
        return view ('admin.user.view-user');
    }


}
