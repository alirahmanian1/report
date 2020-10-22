<?php


namespace Anisa\Report\Middleware;

use Closure;
class AcessReport
{
    public function handle($request,Closure $next)
    {
        return $next($request);
    }
}
