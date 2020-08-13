<?php

namespace App\Http\Middleware;

use Baleghsefat\User\Interfaces\MustVerifyMobile;
use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Redirect;

class EnsureMobileOrEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $redirectToRoute
     * @return mixed
     */
    public function handle($request, Closure $next, $redirectToRoute = null)
    {
        if (!$request->user() || (
                ($request->user() instanceof MustVerifyMobile && !$request->user()->hasVerifiedMobile()) ||
                ($request->user() instanceof MustVerifyEmail && !$request->user()->hasVerifiedEmail()))
        ) {
            return $request->expectsJson()
                ? abort(403, 'Your email address is not verified.')
                : Redirect::route('verification.notice');
        }

        return $next($request);
    }
}
