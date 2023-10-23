<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SetPermissionsPolicy
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
    
        $response->header('Permissions-Policy', 'attribution-reporting=()');
    
        return $response;
    }
}
