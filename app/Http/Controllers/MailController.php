<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Http\Middleware\ContactThrottle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'naam' => 'required|string',
            'email' => 'required|email',
            'telefoon' => 'nullable|phone:NL',
            'bericht' => 'nullable|string',
        ]);

        //telefoon nummer formateren voor layout mail
        $data['telefoon'] = phone($data['telefoon'], 'NL')
            ->formatE164();


        //mail versturen
        Mail::to('wesleyborgman@gmail.com')
            ->send(new ContactMail($data));

        // throttle pas zetten NA succesvolle mail 
        Cache::put('contact_throttle_' . $request->ip(), true, 60);

        return back()->with('success', 'Bericht verzonden');
    }
}
