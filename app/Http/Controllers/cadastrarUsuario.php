<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class cadastrarUsuario extends Controller
{

    public function cadastrar(){
        $dados = cadastrarUsuarioModel::all();

        return view('paginas.cadastrar')->With('dados',$dados);
    } //Fim do metodo index


    public function store(Request $request){
        $nomeUsuario = $request->input('senha');//Coletando os dados do formulario
        $emailUsuario =$request->input('email');
        $senhaUsuario =$request->input('senha');

        $model = new cadastrarUsuarioModel();
        $model-> nome = $nomeUsuario;
        $model-> email = $emailUsuario;
        $model-> senha = $senhaUsuario;
        $model->save();//armazenar os dados no DB

        return redirect('/');
    }//fim do metodo store
}//Fim da classe




