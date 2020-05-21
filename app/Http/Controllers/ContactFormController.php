<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create() {
        $title='Contact us';
        return view('contact.create')->with('title', $title);
    }

    public function store() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        
        //Send an email
        Mail::to('test@test.com')->send(new ContactFormMail($data));

        //Display a thank you message

        return redirect('contact')->with('message', 'Thank you for your message. We\'ll be in touch.');
    }
}
