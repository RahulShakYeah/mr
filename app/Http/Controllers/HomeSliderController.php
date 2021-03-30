<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    public function index(){
        return view('backend.homeslider.list');
    }
}
