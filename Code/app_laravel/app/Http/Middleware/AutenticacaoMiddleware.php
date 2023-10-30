<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao, $perfil): Response
    {
        echo $metodo_autenticacao.' - '.$perfil.'<br>';

        if($metodo_autenticacao == 'padrao'){
            echo 'Verificar usuario e senha'.$perfil.'<br>';

        }
        if($metodo_autenticacao == 'ldap'){
            echo 'Verificar usuario e senha  no AD '.$perfil.'<br>';

        }
        if($perfil == 'visitante'){
            echo 'Exibir apenas alguns recursos'.'<br>';
        }else{
            echo 'carregar perfil do banco de dados'.'<br>';
        }

        if(true){
            return $next($request);
        }else{
            return Response('Acesso negado');
        }
       // return $next($request);

    }
}
