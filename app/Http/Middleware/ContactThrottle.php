<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;

class ContactThrottle
{
    public function handle($request, Closure $next)
    {
        $ip = $request->ip();
        $key = "contact_throttle_$ip";

        if (Cache::has($key)) {

            // timestamp ophalen
            $expiresAt = Cache::get($key);

            // resterende seconden berekenen
            $secondsLeft = now()->diffInSeconds($expiresAt, false);

            // als throttle verlopen is → doorgaan
            if ($secondsLeft <= 0) {
                Cache::forget($key);
                return $next($request);
            }


            // minuten berekenen
            $minuten = ceil($secondsLeft / 60);
            $minuutLabel = ($minuten == 1) ? 'minuut' : 'minuten';

            // nette melding maken
            $message = "Je stuurt te snel berichten. Probeer het over {$minuten} {$minuutLabel} opnieuw.";

            return back()
                ->withErrors(['ThrottleError' => $message])
                ->withInput();
        }

        return $next($request);
    }
}
