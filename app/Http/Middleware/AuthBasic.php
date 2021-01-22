<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User as users;

class AuthBasic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {


        $email = $request->getUser();
        $password = $request->getPassword();

        $user = users::where('email', '=', $email)->first();
        if (!$user) {
            $headers = array('WWW-Authenticate' => 'Basic');
            return response()->json(['message' => 'Unauthorized'],409);
        }
        if (!Hash::check($password, $user->password)) {
            $headers = array('WWW-Authenticate' => 'Basic');
            return response()->json(['message' => 'Unauthorized'],409);
        }
        return $next($request);

    }
}
