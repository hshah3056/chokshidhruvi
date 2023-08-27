<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function Symfony\Component\HttpFoundation\isMethod;

class ContactController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'subject'=>'required',
                'contact_number' => 'required|regex:/^[987][0-9]{9}$/|digits:10',
                'package'=>'required',
                'message'=>'required'
            ],[
                'name'=>'required',
                'email'=>'required',
                'subject'=>'required',
                'contact.required' => 'Mobile Number is Required',
                'contact.regex' => 'Invalid Mobile Number',
                'contact.digits' => 'Mobile Number must be 10 digits',
                'package'=>'required',
                'message'=>'required'
            ]);
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'contact_number' => $request->contact_number,
                'package' => $request->package,
                'message' => $request->message
            ]);

            return redirect()->route('website-contact')->with(['success' => 'Thank you for submitting your records! We will get in touch with you shortly.']);
        }
        return view('website.contact');
    }
}
