<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function index(Request $req){

        return view('contact');
    }

    public function postmsg(Request $request){
        
        //Perform Validation here
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $data = [
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'subject' => $request->subject,
            'message' =>$request->message
        ];
        
        try {
            Mail::to('info@tnlglobal-recrut.com')->send(new ContactMail($data));
            Alert::toast('Your Message was Successfully Sent, Thank You.', 'success');
            return view('contact')->with($data);
        } catch (Throwable $th) {
            Alert::toast('Your massege was not sent, please try later', 'danger');
            return redirect()->back()->with('message_sent_failled', 'Your message was not sent, try later');
        }
        
        // return 'Thanks for reaching out!';
        Alert::toast('Your message was Successfully sent, Thank you.', 'success');
        return view('contact');
    }
}
