<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
       function page(Request $request){

    }

    function contactRequest(Request $request){
        return DB::table('_contacts')->insert($request->input());
    }
}
