<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(){
        return view ('pages.user.profile');
    }
    public function ChangePassword(Request $request){
        $pwd = request('password');
        $confrimPwd = request('password_confrimation');
        if($pwd == $confrimPwd){
            User::whereId(Auth::user()->id)->update([
                'password' => Hash::make($pwd)
            ]);
            Alert::success('Success', 'Password Berhasil dirubah');
            return back();
        } else {
            Alert::error('Gagal', 'Password Konfrimasi Tidak Sama');
            return back();
        }
    }
}
