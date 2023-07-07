<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    function page(Request $request){
        return view('pages.resume');
    }

    function resumeLink(Request $request){
        return DB::table('_resumes')->first();
    }
    function experienceData(Request $request){
        return DB::table('_experinces')->get();
    }
    function educationData(Request $request){
        return DB::table('_educations')->get();
    }
    function skillsData(Request $request){
        return DB::table('_skills')->get();
    }
    function languageData(Request $request){
        return DB::table('_languages')->get();
    }
}
