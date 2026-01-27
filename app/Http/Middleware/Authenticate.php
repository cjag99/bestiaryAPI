<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as MiddlewareAuthenticate;

class Authenticate extends MiddlewareAuthenticate
{
    protected function redirectTo(Request $request)
    {
        return abort(response()->json(['message' => 'Unauthenticated.'], 401));
    }
}
