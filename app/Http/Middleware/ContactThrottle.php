<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;

class ContactThrottle
{
    public function handle($request, Closure $next)
    {
        $key = 'contact_throttle_'.$request->ip();
        if (Cache::has($key)) {
            return back()->withErrors(['ThrottleError' => 'Je stuurt te snel berichten. Probeer het over 1 minuut opnieuw.'])->withInput();
        }

return $next($request);
    }
}
