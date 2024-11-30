<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Check
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $routeName = $request->route()->getName();

        if (\Auth::check()) {

            if (Permission::where('key', $routeName)->first()) {
                $role = \Auth::user()->hasPermission($routeName);

                if ($role) {
                    return $next($request);
                } else {
                    abort(403, 'Sizga mumkun emas');
                }
            }
            else{
                abort(404, 'Bunday saxifa yoq!');
            }

        }

        return redirect('login');

    }
}
