<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AccessController extends Controller
{
    public function Login(Request $request){
       $user = User::where(DB::raw('BINARY `access_code`'), $request->input('access_code'))->first();
       if($user){
           Auth::login($user);
           return redirect('/');
       }
       Alert::error('Gagal' , 'Kode Akses Tidak Valid');
       return back();

    }

    public function register(Request $request){
        $phone  = $request->input('phone');
        $name = $request->input('name');
        $email = $request->input('email');
        $city = $request->input('city_id');
        $pass = Hash::make('hutbjb60');
        if(User::whereEmail($email)->first()){
            Alert::error('Gagal', 'e-mail sudah digunakan');
            return back();
        }
        if(User::wherePhone($phone)->first()){
            Alert::error('Gagal', 'No Telepon Sudah Digunakan');
            return back();
        }
        $cekCity  = City::whereCityName($request->input('city_id'))->first();

        if(!$cekCity){
            Alert::error('Gagal', 'Perikasa kembali nama kota, atau bisa memilih sugesti nama kota anda');
            return back();
        }

        $user =  User::create([
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'city_id' => $cekCity->id,
            'access_code' => Str::random('8'),
            'point' => 0,
            'password' => $pass
        ]);

        Auth::login($user);
    }

}
