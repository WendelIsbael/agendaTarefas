<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class loginUsuario extends Controller
{

    public function index(){

        return view('paginas.login');         //funçaõ que redireciona ate a pagina

    } //Fim do metodo index

    public function login(Request $request){
        
    }
}//Fim da classe




