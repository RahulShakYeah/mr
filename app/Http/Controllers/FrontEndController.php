<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use App\Models\OurTeam;
use App\Models\ProductDetails;
use App\Models\ProductSlider;
use Illuminate\Http\Request;
use App\Models\Tutorial;
use App\Models\Service;
use App\Models\Jobs;
use App\Models\Application;
use App\Models\Product;
class FrontEndController extends Controller
{
    //
    public function index(){
        $slider = HomeSlider::orderBy('priority','ASC')->where('status','active')->get();
        $service = Service::where('status','active')->limit(3)->get();
        $jobs = Jobs::orderBy('created_at','DESC')->where('status','active')->limit(3)->get();
        $ourteam = OurTeam::where('status','active')->limit(4)->get();
        return view('frontend.main',compact('service','slider','jobs','ourteam'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function about(){
        return view('frontend.aboutus');
    }

    public function tutorial(){
        $tutorials = Tutorial::orderBy('created_at','DESC')->simplePaginate(9);
        return view('frontend.tutorial',compact('tutorials'));
    }

    public function service(){
        $service = Service::where('status','active')->get();
        return view('frontend.service',compact('service'));
    }

    public function jobdetail(){
        $jobs = Jobs::orderBy('created_at','DESC')->where('status','active')->simplePaginate(9);
        return view('frontend.jobdetails',compact('jobs'));
    }

    public function jobspecific($id){
        $jobs = Jobs::where('status','active')->findOrFail($id);
        return view('frontend.jobspecific',compact('jobs'));
    }

    public function applicationstore(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|email|unique:applications',
            'cv'=>'required|mimes:pdf',
            'job_title'=>'required|exists:jobs,job_title',
            'company_name'=>'required|exists:jobs,company_name'
        ]);

        if($request->hasFile('cv')){
            $cv = $request->file('cv');
            $path = public_path().'/uploads/cv';
            $fileNameToStore = "CV_".time().rand(0,999).$cv->getClientOriginalName();
            $cv->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = "nocv.pdf";
        }


        $application = new Application();
        $application->name = $request->get('name');
        $application->phone = $request->get('phone');
        $application->email = $request->get('email');
        $application->job_title = $request->get('job_title');
        $application->company_name = $request->get('company_name');
        $application->cv = $fileNameToStore;
        $status = $application->save();
        if($status == true){
            return redirect()->back()->with('success','You have successfully applied for this job');
        }else{
            return redirect()->back()->with('error','Something went wrong!Please try again later');
        }
    }

    public function ourteamlist(){
        $ourteam = OurTeam::where('status','active')->simplePaginate(9);
        return view('frontend.ourteam',compact('ourteam'));
    }

    public function productlist(){
        $product = Product::where('status','active')->simplePaginate(9);
        return view('frontend.product',compact('product'));
    }

    public function productDetails($id){
        $productDetails = ProductDetails::with('product')->where(['product_id' => $id,'status' => 'active'])->first();
        $productSlider = ProductSlider::where(['product_id' => $id,'status' => 'active'])->get();
        return view('frontend.productdetails',compact('productDetails','productSlider'));
    }
}
