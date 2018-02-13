<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


class PainelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('painel.login');
    }

    public function logar(Request $request) {
        echo $this->estaLogado();

        //logando o usuário na sessão
        $user['email'] = Input::get('email');
        $user['password'] = Input::get('password');
        
        //tenta achar o usuário através do email e senha e assim, logar o msm.
        $user = User::find($id_user);
        Auth::login($user);

        echo $this->estaLogado();

        die;
    }

    public function estaLogado() {
        if(Auth::check()) {
            return 'esta logado';
        } else {
            return 'não esta logado';
        }
    }

}
