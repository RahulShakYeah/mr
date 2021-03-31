<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurTeam;
class OurTeamController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $ourteam = OurTeam::orderBy('created_at','DESC')->get();
        return view('backend.team.list',compact('ourteam'));
    }

    public function create(){
        return view('backend.team.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'photo' => 'required',
            'position' => 'required',
            'email' => 'required|email|unique:our_teams',
            'phone' => 'required|integer'
        ]);


        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $path = public_path().'/uploads/team/';
            $fileNameToStore = 'TeamMember_'.time().rand(0,999).$photo->getClientOriginalName();
            $photo->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = 'noimg.jpg';
        }

        if($request->get('linkedin') == 'null'){
            $linkedin = 'nolink';
        }else {
            $linkedin = $request->get('linkedin');
        }

        $ourteam = new OurTeam();
        $ourteam->name = $request->get('name');
        $ourteam->position = $request->get('position');
        $ourteam->email = $request->get('email');
        $ourteam->phone = $request->get('phone');
        $ourteam->linkedin = $linkedin;
        $ourteam->photo = $fileNameToStore;
        $ourteam->status = $request->get('status');
        $status = $ourteam->save();

        if($status == true){
            return redirect()->route('team.index')->with('success','Team Member details added successfully');
        }else{
            return redirect()->route('team.index')->with('error','Something went wrong!Please try again later');
        }

    }

    public function destroy($id){
        $ourteam = OurTeam::findOrFail($id);
        $oldPath = public_path().'/uploads/team/'.$ourteam->photo;
        if(\File::exists($oldPath)){
            \File::delete($oldPath);
        }
        $status = $ourteam->delete();

        if($status == true){
            return redirect()->route('team.index')->with('success','Team Member details deleted successfully');
        }else{
            return redirect()->route('team.index')->with('error','Something went wrong!Please try again later');
        }

    }

    public function edit($id){
        $ourteam = OurTeam::findOrFail($id);
        return view('backend.team.edit',compact('ourteam'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'name' => 'required',
            'position' => 'required',
            'email' => 'required',
            'phone' => 'required|integer'
        ]);



    }

}
