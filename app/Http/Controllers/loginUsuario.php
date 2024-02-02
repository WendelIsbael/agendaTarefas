<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class loginUsuario extends Controller
{

    public function index(){
        $dados = cadastrarUsuarioModel::all();

        return view('paginas.login')->With('dados',$dados);
    } //Fim do metodo index

    public function login(Request $request){
        
    }
}//Fim da classe




