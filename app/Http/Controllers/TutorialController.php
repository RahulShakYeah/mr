<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use App\Models\Tutorial;
class TutorialController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('backend.tutorial.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'videourl' => 'required',
            'status' => 'required|in:active,inactive'
        ]);

        $tutorial = new Tutorial();
        $tutorial->title = $request->get('title');
        $tutorial->video_link = $request->get('videourl');
        $video_id = $tutorial->getYoutubeVideoId($request->get('videourl'));
        $tutorial->status = $request->get('status');
        $tutorial->video_id = $video_id;
        $status = $tutorial->save();
        if($status == true) {
            return redirect()->route('tutorial.show')->with('success', 'Tutorial added successfully');
        }else{
            return redirect()->route('tutorial.show')->with('error', 'Error occured while adding the video');
        }
    }

    public function showAll(){
        $alltutorial = Tutorial::orderBy('created_at','DESC')->get();
        return view('backend.tutorial.show',compact('alltutorial'));
    }

    public function destroy($id){
        $tutorial = Tutorial::findOrFail($id);
        $status = $tutorial->delete();
        if($status == true){
            return redirect()->route('tutorial.show')->with('success','Tutorial deleted successfully');
        }else{
            return redirect()->route('tutorial.show')->with('danger','Something went wrong!Please try again later');
        }
    }
}
