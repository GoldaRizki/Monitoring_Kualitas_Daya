<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        

        $pengukuran = Data::latest()->limit(10)->get()->reverse();
        
        

        return view('main.index', [
            'pengukuran' => $pengukuran,
        ]);

    }
}
