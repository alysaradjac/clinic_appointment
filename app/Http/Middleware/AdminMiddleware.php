<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Assuming you have a method to get the current user's admin status
        if ($this->isAdmin($request)) {
            // If the user is an admin, proceed to the next middleware or route
            return $next($request);
        }

        // If the user is not an admin, redirect them to a custom page or show an error
        abort(403, 'Unauthorized action.');
    }

    protected function isAdmin($request)
    {
        // Implement your logic to check if the user is an admin
        // For example, checking a user model property or a database query
        return $request->user()->hasRole('admin'); // Assuming a method exists to check the role
    }
}