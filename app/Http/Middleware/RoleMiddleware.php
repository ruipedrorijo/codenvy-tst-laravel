<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware {
   public function handle($request, Closure $next, $role) {
      echo "Role 2 ". $role; 
      
      //if (! $request->user()->hasRole($role)) {
            // Redirect...
      //  }
      
      return $next($request);
   }
   
   public function terminate($request, $response)
   {
      echo "I am at terminate function";
        
   }
}
