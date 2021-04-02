<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $product = Product::all();
        return view('backend.product.list',compact('product'));
    }

    public function create(){
        return view('backend.product.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'product_name' => 'required',
            'status' => 'required|in:active,inactive'
        ]);

        $product = new Product();
        $product->product_name = $request->get('product_name');
        $product->status = $request->get('status');
        $status = $product->save();
        if($status == true){
            return redirect()->route('product.index')->with('success','Product name added successfully');
        }else{
            return redirect()->route('product.index')->with('error','Something went wrong!Please try again later');
        }
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $status = $product->delete();
        if($status == true){
            return redirect()->route('product.index')->with('success','Product name deleted successfully');
        }else{
            return redirect()->route('product.index')->with('error','Something went wrong!Please try again later');
        }
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('backend.product.edit',compact('product'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'product_name' => 'required',
            'status' => 'required|in:active,inactive'
        ]);

        $product = Product::findOrFail($id);
        $product->product_name = $request->get('product_name');
        $product->status = $request->get('status');
        $status = $product->save();

        if($status == true){
            return redirect()->route('product.index')->with('success','Product name updated successfully');
        }else{
            return redirect()->route('product.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
