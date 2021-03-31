<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSlider;

class HomeSliderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $slider = HomeSlider::orderBy('priority','ASC')->get();
        return view('backend.homeslider.list',compact('slider'));
    }

    public function create(){
        return view('backend.homeslider.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'primary_text' => 'required',
            'secondary_text' => 'required',
            'photo' => 'required',
            'priority' => 'required',
            'status' => 'required|in:active,inactive'
        ]);
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = public_path().'/uploads/homeslider';
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore =  'Slider_'.time().rand(0,999).$file->getClientOriginalName();
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = "noimg.jpg";
        }

        $slider = new HomeSlider();
        $slider->primary_text = $request->get('primary_text');
        $slider->secondary_text = $request->get('secondary_text');
        $slider->priority = $request->get('priority');
        $slider->status = $request->get('status');
        $slider->image = $fileNameToStore;
        $status = $slider->save();
        if($status == true){
            return redirect()->route('slider.index')->with('success','Slider photo added successfully');
        }else{
            return redirect()->route('slider.index')->with('error','Something went wrong!Please try again later');
        }
    }

    public function destroy($id){
        $slider = HomeSlider::findOrFail($id);
        $path = public_path().'/uploads/homeslider/'.$slider->image;
        if(\File::exists($path)){
            \File::delete($path);
        }
        $status = $slider->delete();
        if($status == true){
            return redirect()->route('slider.index')->with('success','Slider photo deleted successfully');
        }else{
            return redirect()->route('slider.index')->with('error','Something went wrong!Please try again later');
        }
    }

    public function edit($id){
        $slider = HomeSlider::findOrFail($id);
        return view('backend.homeslider.edit',compact('slider'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'primary_text' => 'required',
            'secondary_text' => 'required',
            'priority' => 'required',
            'status' => 'required|in:active,inactive'
        ]);
        $slider = HomeSlider::findOrFail($id);

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $oldPath = public_path().'/uploads/homeslider/'.$slider->image;

            if(\File::exists($oldPath)){
                \File::delete($oldPath);
            }

            $newPath = public_path().'/uploads/homeslider/';
            $fileNameToStore = 'Slider_'.time().rand(0,999).$file->getClientOriginalName();
            $file->move($newPath,$fileNameToStore);
        }else{
            $fileNameToStore = $slider->image;
        }

        $slider->primary_text = $request->get('primary_text');
        $slider->secondary_text = $request->get('secondary_text');
        $slider->priority = $request->get('priority');
        $slider->status = $request->get('status');
        $slider->image = $fileNameToStore;
        $status = $slider->save();
        if($status == true){
            return redirect()->route('slider.index')->with('success','Slider photo updated successfully');
        }else{
            return redirect()->route('slider.index')->with('error','Something went wrong!Please try again later');
        }

    }
}
