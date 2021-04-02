<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSlider;
class ProductSliderController extends Controller
{
    //
    public function index(){
        $productslider = ProductSlider::with('product')->orderBy('created_at','DESC')->get();
        return view('backend.productslider.list',compact('productslider'));
    }

    public function create(){
        return view('backend.productslider.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'photo' => 'required',
            'product_name' => 'required|exists:products,id',
            'status' => 'required|in:active,inactive'
        ]);

        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $path = public_path().'/uploads/productslider/';
            $fileNameToStore = 'ProductSlider_'.time().rand(0,999).$photo->getClientOriginalName();
            $photo->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = 'noimg.jpg';
        }

        $productslider = new ProductSlider();
        $productslider->product_id = $request->get('product_name');
        $productslider->photo = $fileNameToStore;
        $productslider->status = $request->get('status');
        $status = $productslider->save();
        if($status == true){
            return redirect()->route('productslider.index')->with('success','Slider photo uploaded successfully');
        }else{
            return redirect()->route('productslider.index')->with('error','Something went wrong!Please try again later');
        }
    }

    public function destroy($id){
        $productSlider = ProductSlider::findOrFail($id);
        $oldPath = public_path().'/uploads/productslider/'.$productSlider->photo;
        if(\File::exists($oldPath)){
            \File::delete($oldPath);
        }

        $status = $productSlider->delete();
        if($status == true){
            return redirect()->route('productslider.index')->with('success','Slider photo deleted successfully');
        }else{
            return redirect()->route('productslider.index')->with('error','Something went wrong!Please try again later');
        }
    }

    public function edit($id){
        $productslider = ProductSlider::findOrFail($id);
        return view('backend.productslider.edit',compact('productslider'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'product_name' => 'required|exists:products,id',
            'status' => 'required|in:active,inactive'
        ]);

        $productslider = ProductSlider::findOrFail($id);

         if($request->hasFile('photo')){
            $oldPath = public_path().'/uploads/productslider/'.$productslider->photo;
            if(\File::exists($oldPath)){
                \File::delete($oldPath);
            }

            $photo = $request->file('photo');
            $newPath = public_path().'/uploads/productslider/';
            $fileNameToStore = 'Upatedproductslider_'.time().rand(0,999).$photo->getClientOriginalName();
            $photo->move($newPath,$fileNameToStore);
        }else{
            $fileNameToStore = $productslider->photo;
        }


        $productslider->product_id = $request->get('product_name');
        $productslider->status = $request->get('status');
        $productslider->photo = $fileNameToStore;
        $status = $productslider->save();
        if($status == true){
            return redirect()->route('productslider.index')->with('success','Slider photo deleted successfully');
        }else{
            return redirect()->route('productslider.index')->with('error','Something went wrong!Please try again later');
        }

    }
}
