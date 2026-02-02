<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'naam' => 'required|string',
            'email' => 'required|email',
            'telefoon' => 'nullable|string|regex:/^([+]?\d{1,3})?[-.\s]?\(?\d{1,4}\)?[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/',
            'bericht' => 'nullable|string',
        ]);

        Mail::to('wesleyborgman@gmail.com')
            ->send(new TestEmail($data));

        return back()->with('success', 'Bericht verzonden');
    }
}
