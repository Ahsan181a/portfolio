<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailContact;

class ContactFormController extends Controller
{
    public function store()
    {
        return request()-all();
        $contact_form_data = request()->all();
        Mail::to('ahsanbondhan@gmail.com')->send(new MailContact($contact_form_data));
        
        return redirect()->route('home','/#contact')->with('success','Your message has been submitted successfully');  
    }
}
