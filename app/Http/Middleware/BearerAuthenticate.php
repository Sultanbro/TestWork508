<?php

namespace App\Http\Middleware;

use App\Http\Services\Authenticate\AuthenticateService;
use App\Http\Services\Authenticate\KeyCloakServiceInterface;
use App\Models\User;
use App\Models\UserToken;
use App\Repository\User\UserTokenRepositoryInterface;
use Closure;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\UnauthorizedException;

class BearerAuthenticate
{
    public $token;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (($this->token = $request->header('Authorization', null)) === null)
            return \response()->json(['token' => 'not found'], 401);
        return $next($request);

    }

}

