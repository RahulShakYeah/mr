<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
class JobsController extends Controller
{
    //
    public function index(){
        $jobs = Jobs::orderBy('created_at','DESC')->get();
        return view('backend.jobs.list',compact('jobs'));
    }

    public function create(){
        return view('backend.jobs.create');
    }

    public function store(Request  $request){
        $this->validate($request,[
            'company_name' => 'required',
            'company_logo' => 'required',
            'job_level' => 'required|in:Senior,Mid,Junior',
            'number_of_vacancy' => 'required',
            'employement_type' => 'required|in:full-time,part-time',
            'education_level' => 'required',
            'experience' => 'required',
            'job_title' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'exp_date' => 'required|date',
            'status' => 'required|in:active,inactive'
        ]);
        if($request->hasFile('company_logo')){
            $file = $request->file('company_logo');
            $path = public_path().'/uploads/companylogo';
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore =  'CompanyLogo_'.time().rand(0,999).$file->getClientOriginalName();
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = "noimg.jpg";
        }

        $jobs = new Jobs();
        $jobs->company_name = $request->get('company_name');
        $jobs->company_logo = $fileNameToStore;
        $jobs->number_of_vacancy = $request->get('number_of_vacancy');
        $jobs->employement_type = $request->get('employement_type');
        $jobs->education_level = $request->get('education_level');
        $jobs->experience = $request->get('experience');
        $jobs->job_title = $request->get('job_title');
        $jobs->location = $request->get('location');
        $jobs->salary = $request->get('salary');
        $jobs->exp_date = $request->get('exp_date');
        $jobs->job_description = htmlentities($request->get('description'));
        $jobs->status = $request->get('status');
        $status = $jobs->save();
        if($status == true){
            return redirect()->route('jobs.index')->with('success','Job added successfully');
        }else{
            return redirect()->route('jobs.index')->with('error','Something went wrong!Please try again later');
        }
    }

    public function destroy($id){
        $jobs = Jobs::findOrFail($id);
        $oldPath = public_path().'/uploads/companylogo/'.$jobs->company_logo;
        if(\File::exists($oldPath)){
            \File::delete($oldPath);
        }
        $status = $jobs->delete();
        if($status == true){
            return redirect()->route('jobs.index')->with('success','Job delete successfully');
        }else{
            return redirect()->route('jobs.index')->with('error','Something went wrong!Please try again later');
        }
    }

    public function edit($id){
        $jobs = Jobs::findOrFail($id);
        return view('backend.jobs.edit',compact('jobs'));
    }

    public function update(Request $request,$id){
        $jobs = Jobs::findOrFail($id);
        $this->validate($request,[
            'company_name' => 'required',
            'job_level' => 'required|in:Senior,Mid,Junior',
            'number_of_vacancy' => 'required',
            'employement_type' => 'required|in:full-time,part-time',
            'education_level' => 'required',
            'experience' => 'required',
            'job_title' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'exp_date' => 'required|date',
            'status' => 'required|in:active,inactive'
        ]);

        if($request->hasFile('company_logo')){
            $file = $request->file('company_logo');
            $oldPath = public_path().'/uploads/companylogo/'.$jobs->company_logo;

            if(\File::exists($oldPath)){
                \File::delete($oldPath);
            }

            $newPath = public_path().'/uploads/companylogo/';
            $fileNameToStore = 'CompanyLogo_'.time().rand(0,999).$file->getClientOriginalName();
            $file->move($newPath,$fileNameToStore);
        }else{
            $fileNameToStore = $jobs->company_logo;
        }


        $jobs->company_name = $request->get('company_name');
        $jobs->company_logo = $fileNameToStore;
        $jobs->number_of_vacancy = $request->get('number_of_vacancy');
        $jobs->employement_type = $request->get('employement_type');
        $jobs->education_level = $request->get('education_level');
        $jobs->experience = $request->get('experience');
        $jobs->job_title = $request->get('job_title');
        $jobs->location = $request->get('location');
        $jobs->salary = $request->get('salary');
        $jobs->exp_date = $request->get('exp_date');
        $jobs->job_description = htmlentities($request->get('description'));
        $jobs->status = $request->get('status');
        $status = $jobs->save();
        if($status == true){
            return redirect()->route('jobs.index')->with('success','Job updated successfully');
        }else{
            return redirect()->route('jobs.index')->with('error','Something went wrong!Please try again later');
        }


    }
}
