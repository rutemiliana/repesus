<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserHasAccessLevel
{
    public function handle(Request $request, Closure $next, $requiredLevel)
    {
        // Verifica se o usuário está logado e se o nível de acesso corresponde ao necessário
        if (!Auth::check() || Auth::user()->access_level_id != $requiredLevel) {
            // Redirecionar se não tiver o nível de acesso correto
            return redirect('home')->with('error', 'Você não tem permissão para acessar essa área.');
        }

        return $next($request);
    }
}

