<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeNewSubscriberMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function store() {
        $data = request()->validate([
            'email' => 'required|email',
        ]);
        
        //Send an email
        Mail::to('test@test.com')->send(new WelcomeNewSubscriberMail($data));

        dump('Regitsered to newsletter');
        dump('Slack mesage here');

        //Display a thank you message

        //return redirect('/')->with('message', 'You have successfully subscribed to our newsletter. Thank you for your interest in Friday Solutions. Enjoy reading and learning!');
    }
}
