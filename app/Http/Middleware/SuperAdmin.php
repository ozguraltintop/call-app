<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $userTest = new User;
            $controlId = Auth::user()->id;
            $controlValue = $userTest->getRole($controlId);
            foreach ($controlValue as $a) {
                $mainValue = $a->role;
            }
            if ($mainValue == 0) {
                return $next($request);
            } else {
                return redirect('/login');
            }
        } else {
            return redirect('/login');
        }


    }
}
