<?php

namespace App\Http\Middleware;

use Closure;

class IsJobPoster
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      //  if ($request->user()->role != 'job_poster' && $request->user()->role != 'admin')
      if ($request->user()->role == 'user' )
            abort(401);
//            return response()->json('Unauthorized', 401);
        if ($request->user()->role == 'admin')
            return $next($request);
        else
        {
            if($request->user()->is_approved and $request->user()->email_verified_at ){
                return $next($request);
            }
            abort(401);
        }
    }
}
