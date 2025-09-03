<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckApiKey
{
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('x-api-key');

        if ($apiKey !== 'a093f1191fb903adf2865b31d9567413') {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
