<?php

namespace RobinDrost\PrismicIntegrationField\Http\Middleware;

use Closure;

class VerifyAccessToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $accessTokens = config('prismic-integration-field.access_tokens', []);

        if (empty($accessTokens) || in_array($request->getUser(), $accessTokens)) {
            return $next($request);
        }

        abort(403);
    }
}
