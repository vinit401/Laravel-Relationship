<?php

namespace App\Http\Controllers;

use App\Mail\welcomemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailcontroller extends Controller
{
    function sendEmail(){

        $to = "vinit.kumar.sah.401@gmail.com";
        $msg = "Hello Vinit, This is a test email from Laravel application.";

        // Code to send email would go here
        $subject = "Test Email from Laravel";
        Mail::to($to)->send(new welcomemail($msg, $subject));
    }
}
