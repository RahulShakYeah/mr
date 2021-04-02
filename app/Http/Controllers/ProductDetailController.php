<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDetails;
use App\Models\User;
class ProductDetailController extends Controller
{
    //
    public function index(){
        $productDetails = ProductDetails::with('product')->get();
        return view('backend.productdetail.list',compact('productDetails'));
    }

    public function create(){
        return view('backend.productdetail.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'product_name' => 'required|exists:products,id',
            'status' => 'required|in:active,inactive',
            'product_detail' => 'required'
        ]);

        $productDetails = new ProductDetails();
        $productDetails->product_id = $request->get('product_name');
        $productDetails->product_details = htmlentities($request->get('product_detail'));
        $productDetails->status = $request->get('status');
        $status = $productDetails->save();

        if($status == true){
            return redirect()->route('productdetail.index')->with('success','Product details added successfully');
        }else{
            return redirect()->route('productdetail.index')->with('error','Something went wrong!Please try again later');
        }
    }

    public function destroy($id){
        $productDetail = ProductDetails::findOrFail($id);
        $status = $productDetail->delete();

        if($status == true){
            return redirect()->route('productdetail.index')->with('success','Product details deleted successfully');
        }else{
            return redirect()->route('productdetail.index')->with('error','Something went wrong!Please try again later');
        }
    }

    public function edit($id){
        $productDetail = ProductDetails::findOrFail($id);
        return view('backend.productdetail.edit',compact('productDetail'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'product_name' => 'required|exists:products,id',
            'status' => 'required|in:active,inactive',
            'product_detail' => 'required'
        ]);
        $productDetails = ProductDetails::findOrFail($id);
        $productDetails->product_id = $request->get('product_name');
        $productDetails->product_details = htmlentities($request->get('product_detail'));
        $productDetails->status = $request->get('status');
        $status = $productDetails->save();

        if($status == true){
            return redirect()->route('productdetail.index')->with('success','Product details updated successfully');
        }else{
            return redirect()->route('productdetail.index')->with('error','Something went wrong!Please try again later');
        }
    }

    public function alluser(){
        $alluser = User::all();
        return view('backend.users.list',compact('alluser'));
    }

    public function deleteuser($id){
        $user =  User::findOrFail($id);
        $status = $user->delete();

        if($status == true){
            return redirect()->route('all.users')->with('success','User data delete successfully');
        }else{
            return redirect()->route('all.users')->with('error','Something went wrong!Please try again later');
        }
    }
}
