<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
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

        // Telefoonnummer formatteren
        if (!empty($data['telefoon'])) {
            $data['telefoon'] = phone($data['telefoon'], 'NL')->formatE164();
        }

        // Mail versturen
        Mail::to('wesleyborgman@gmail.com')->send(new ContactMail($data));

        // Throttle instellen (bijv. 300 seconden = 5 minuten)
        $cooldownSeconds = 300;
        $ip = $request->ip();

        // Expiratietijd berekenen
        $expiresAt = now()->addSeconds($cooldownSeconds);

        // Throttle opslaan met timestamp
        Cache::put("contact_throttle_$ip", $expiresAt, $cooldownSeconds);

        // Success message opslaan (zelfde duur)
        Cache::put(
            "contact_success_message_$ip",
            'Bericht verzonden! We nemen spoedig contact met u op!',
            $cooldownSeconds
        );

        // Geen flash message meer — middleware toont success zolang throttle actief is
        return back();
    }
}
