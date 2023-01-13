<?php
namespace App\Http\Controllers;

use App\Mail\EmailNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class MailController extends Controller
{
    public function mail() 
    {
        // return "<h2>Hello World</h2>";
        
        // Notification::route('mail', [
        //     'barrett@example.com' => 'Barrett Blair',
        // ])->notify(new EmailNotification());
        // $user->notify(new EmailNotification());

        Mail::to("rizkipuj@gmail.com")->send(new EmailNotification());
        echo "Email Sent. Check your inbox.";

    }
}