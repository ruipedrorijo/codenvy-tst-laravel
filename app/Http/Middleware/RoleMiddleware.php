<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware {
   public function handle($request, Closure $next, $role) {
      echo "Role 2 ". $role;
      
      /*
       * 
       */
      
      
      return $next($request);
   }
}
