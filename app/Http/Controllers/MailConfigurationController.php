<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailConfiguration;
class MailConfigurationController extends Controller
{
    //
    public function index(){
        return view('backend.mailconfig.list');
    }

    public function create(){
        return view('backend.mailconfig.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required',
            'status' => 'required|in:active,inactive'
        ]);
        $mailconfig = new MailConfiguration();
        $mailconfig->user_name = $request->get('username');
        $mailconfig->password = $request->get('password');
        $mailconfig->status = $request->get('status');

        $status = $mailconfig->save();
        if($status == true){
            return redirect()->route('mailconfig.index')->with('success','Mail Configuration saved successfully');
        }else{
            return redirect()->route('mailconfig.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
