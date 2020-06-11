<?php

namespace App\Http\Controllers;

use App\Mail\ContactProjectMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactWithProjectInfoController extends Controller
{
    public function create() {
        $title='Project Plan';
        return view('contact.contact_project')->with('title', $title);
    }

    public function store() {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'company_name' => 'required',
            // 'web_address'
            // 'description'
            // 'achieve'
            // 'goals'
            // 'aims'
            // 'budget'
            // 'deadline'
            // 'audience'
            // 'interact'
            // 'competitors'
            // 'uniqueness'
            // 'content'
            // 'brand'
            // 'look'
            // 'preference'
            // 'pages'
            // 'features'
            // 'domain'
        ]);

        Mail::to('test@test.com')->send(new ContactProjectMail($data));

        return redirect('contact_project')->with('message', 'Your message has been successfully sent. Thank you for your interest in Friday Solutions. Someone will get back to you soon.');
    }
}
