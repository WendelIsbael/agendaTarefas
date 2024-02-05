<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class criarTarefas extends Controller
{
    public function home(){
        $dados = criarTarefasModel::all();

        return view('paginas.home')->With('dados', $dados);     //função para direcionar ate a pagina
    }//fim da functon


    public function store(Request $request) {
        $tituloTarefa = $request->input('titulo');
        $descricaoTarefa = $request->input('descricao');

        $model = new criarTarefasModel();                       //função para salvar os dados requisitados 
        $model-> titulo = $tituloTarefa;
        $model-> descricao = $descricaoTarefa;
        $model-> save();// armazena os dados na tabela terefas

        return view('/home');
    }//fim da funcition
}// fim da classe
