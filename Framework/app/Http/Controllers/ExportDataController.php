<?php

namespace App\Http\Controllers;

use App\Imports\ImportPromo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Upload(){
        return view ('admin.upload');
    }

    public function Import(Request $request){
        Excel::import(new ImportPromo(), $request->file('import'));
    }
}
