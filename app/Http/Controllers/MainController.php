<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function nova_pagina(): View
    {
        return view('nova_pagina');
    }

    public function testes(Request $request)
    {
        //dado do usuario autenticado
        $id = auth()->user()->id;
        //  OU
        $id = $request->user()->id;
        echo $id;
        $username = auth()->user()->email;
        echo $username;
    }

    public function nova_pagina_publica() 
    {
        return view('nova_pagina_publica');
    }

    public function main_logout() 
    {
        // fazer logout sem POST - limpar o usuário da sessão
        Auth::logout();

        // invalidara sessao e regenerar o token
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    }
}
