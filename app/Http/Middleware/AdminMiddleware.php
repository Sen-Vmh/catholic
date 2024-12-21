<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->isAdmin()) {
            return $next($request);
        }

        session()->flash('alert', [
            'message' => 'Unauthorized',
            'type' => 'error'
        ]);

        return redirect()->back();
    }
}
