<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeNewSubscriberMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Subscriber;

class SubscribeController extends Controller
{
    public function store() {
        $data = request()->validate([
            'email' => 'required|email',
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = request('email');
        $subscriber->save();
        
        //Send an email
        Mail::to('test@test.com')->send(new WelcomeNewSubscriberMail($data));

        dump('Registered to newsletter');
        dump('Slack mesage here');

        //Display a thank you message

        //return redirect('/')->with('message', 'You have successfully subscribed to our newsletter. Thank you for your interest in Friday Solutions. Enjoy reading and learning!');
    }
}
