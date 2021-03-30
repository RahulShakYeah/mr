<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;
use App\Models\Service;
class FrontEndController extends Controller
{
    //
    public function index(){
        $service = Service::where('status','active')->limit(3)->get();
        return view('frontend.main',compact('service'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function about(){
        return view('frontend.aboutus');
    }

    public function tutorial(){
        $tutorials = Tutorial::orderBy('created_at','DESC')->simplePaginate(9);
        return view('frontend.tutorial',compact('tutorials'));
    }

    public function service(){
        $service = Service::where('status','active')->get();
        return view('frontend.service',compact('service'));
    }
}
