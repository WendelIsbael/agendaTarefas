<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class loginUsuario extends Controller
{

    public function index(){
        $dados = loginUsuarioModel::all();

        return view('paginas.login')->With('dados',$dados);         //funçaõ que redireciona ateb a pagina

    } //Fim do metodo index

    public function login(Request $request){
        
    }
}//Fim da classe




