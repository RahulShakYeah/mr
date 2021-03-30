<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function list(){
        $serviceAll = Service::all();
        return view('backend.service.list',compact('serviceAll'));
    }

    public function create(){
        return view('backend.service.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'icons'=>'required',
            'description'=>'required',
            'status'=>'required|in:active,inactive'
        ]);

        $service = new Service();
        $service->title = $request->get('title');
        $service->icons = $request->get('icons');
        $service->description = $request->get('description');
        $service->status = $request->get('status');
        $status = $service->save();
        if($status == true){
            return redirect()->route('service.list')->with('success','Service added successfully');
        }else{
            return redirect()->route('service.list')->with('error','Something went wrong!Please try again later');
        }
    }

    public function destroy($id){
        $service = Service::findOrFail($id);
        $status = $service->delete();
        if($status == true){
            return redirect()->route('service.list')->with('success','Service deleted successfully');
        }else{
            return redirect()->route('service.list')->with('error','Something went wrong!Please try again later');
        }
    }

    public function edit($id){
        $service = Service::findOrFail($id);
        return view('backend.service.edit',compact('service'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=>'required',
            'icons'=>'required',
            'description'=>'required',
            'status'=>'required|in:active,inactive'
        ]);

        $service = Service::findOrFail($id);
        $service->title = $request->get('title');
        $service->icons = $request->get('icons');
        $service->description = $request->get('description');
        $service->status = $request->get('status');
        $status = $service->save();
        if($status == true){
            return redirect()->route('service.list')->with('success','Service updated successfully');
        }else{
            return redirect()->route('service.list')->with('error','Something went wrong!Please try again later');
        }
    }
}
