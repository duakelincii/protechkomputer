<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
class ContactController extends Controller
{
    function index()
    {
        return view('main/contact');
    }
    public function storeContactForm(Request $req)
    {
        $req->validate([
            'name'=> 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'contact_message' => 'required'
        ]);

        Contact::create($req->all());

        //Send Email
        \Mail::send('mail',array(
            'name' =>$req['name'],
            'email'=>$req['email'],
            'subject'=>$req['subject'],
            'contact_message'=>$req['contact_message'],
        ), function($message) use ($req){
            $message->from('admin@admin.com','Admin');
            $message->to('admin@admin.com','Admin')->subject($req->get('subject'));
            //ini kalo mau buat kirim ke email org yg dituju gitu 
            // $message->to($req->email)->subject($req->get('subject'));
        });

        return back()->with('success','Contact Form Submitted Successfully');
    }

    public function viewContact()
    {
        $contact = Contact::get();
        return view('admin/contact',['contact'=>$contact]);
    }

}
