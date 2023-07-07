<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function page(Request $request){
        return view('pages.home');
    }

    function heroData(Request $request){
        return DB::table('_heropropertiess')->first();
    }
    function aboutData(Request $request){
        return DB::table('_abouts')->first();
    }
    function socialData(Request $request){
        return DB::table('_socials')->first();
    }
}
