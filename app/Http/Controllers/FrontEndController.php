<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Http\Request;
use App\Models\Tutorial;
use App\Models\Service;
class FrontEndController extends Controller
{
    //
    public function index(){
        $slider = HomeSlider::orderBy('priority','ASC')->where('status','active')->get();
        $service = Service::where('status','active')->limit(3)->get();
        return view('frontend.main',compact('service','slider'));
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
