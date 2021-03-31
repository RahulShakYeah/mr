<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
class ApplicantController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $applicants = Application::orderBy('created_at','DESC')->get();
        return view('backend.applicants.list',compact('applicants'));
    }

    public function destroy($id){
        $applicant = Application::findOrFail($id);
        $oldPath = public_path().'/uploads/cv/'.$applicant->cv;
        if(\File::exists($oldPath)){
            \File::delete($oldPath);
        }
        $status = $applicant->delete();
        if($status == true){
            return redirect()->back()->with('success','Applicant data deleted successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong!Please try again later');
        }
    }

    public function cvview($id){
        $applicant = Application::findOrFail($id);
        return view('backend.applicants.view',compact('applicant'));
    }

    public function download($file){
        return response()->download('uploads/cv/'.$file);
    }
}
