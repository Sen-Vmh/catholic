<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsActive
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && !$request->user()->hasVerifiedEmail()) {
            session()->flash('alert', [
                'message' => 'Please verify email',
                'type' => 'warning'
            ]);

            return redirect()->route('verification.notice');
        }


        return $next($request);
    }
}
