<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function store(Request $request){
        $this->validate($request,[
            "name"=>"required|min:3",
            "email" => "required|email|unique:contact",
            "subject" => "required|min:5",
            "message" => "required"
        ]);
        $contact = new Contact();
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        $contact->message = $request->get('message');
        $details = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message')
        ];
        Mail::to('rahulshakya123rs@gmail.com')->send(new ContactMail($details));
        $status = $contact->save();
        if ($status == true){
            return redirect()->route('front.contact')->with('success','Message has been seen successfully');
        }else{
            return redirect()->route('front.contact')->with('error','Something went wrong.Please try again later!');
        }
    }

    public function showallMessage(){
        $contact = Contact::orderBy('created_at','DESC')->get();
        return view('backend.contact.show',compact('contact'));
    }

    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $status = $contact->delete();
        if($status == true){
            return redirect()->route('contact.showall')->with('success','Contact message has been deleted successfully');
        }else{
            return redirect()->route('contact.showall')->with('error','Something went wrong!Please try again later');
        }
    }
}
