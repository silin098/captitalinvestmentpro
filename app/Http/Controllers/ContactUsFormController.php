<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactUsFormController extends Controller
{
    public function createForm(){
        return view('contact');
    }

    public function storeForm(Request $request){
        // form validation


        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message'=>'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        Contact::create([
            'name'=>$request->name,
             'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);


        Mail::send('mail',array(
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'subject'=>$request->get('subject'),
            'user_query'=>$request->get('message'),
        ), function ($message) use($request){
            $message->from($request->email);
            $message->to('hr@capitalinvestmentpro.com','Admin')->subject($request->get('subject'));
        });

        return back()->with('success','We have received your message and would like to thank you for writing to us.');




    }


}
