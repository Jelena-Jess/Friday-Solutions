<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create() {
        $title='Contact';
        return view('contact.create')->with('title', $title);
    }

    public function store() {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            //'phone' => 'required|numeric',
            'message' => 'required',
        ]);
        
        //Send an email
        Mail::to('jelenafriday@gmail.com')->send(new ContactFormMail($data));

        //Display a thank you message

        return redirect('contact')->with('message', 'Your message has been successfully sent. I will get back to you soon.');
    }
}
