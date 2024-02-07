<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\criarTarefasModel;

class criarTarefas extends Controller
{
    public function home(){
        $dados = criarTarefasModel::all();

        return view('paginas.home')->With('dados', $dados);     //função para direcionar ate a pagina
    }//fim da function


    public function store(Request $request) {
        $tituloTarefa = $request->input('titulo');
        $descricaoTarefa = $request->input('descricao');

        $model = new criarTarefasModel();                       //função para salvar os dados requisitados 
        $model-> titulo = $tituloTarefa;
        $model-> descricao = $descricaoTarefa;
        $model->save();// armazena os dados na tabela terefas

        return redirect('/');
    }//fim da function

    public function consultar(){
        $dados = criarTarefasModel::all();

        return view('paginas.home', compact('dados'));   
    }//fim da funcao
    

}// fim da classe
