<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Estado;
use Illuminate\Http\Request;

class AlunosController extends Controller{

    public function index()
    {
        $alunos = Aluno::query()->orderBy('nome')->get();
        return view('alunos.index')->with('alunos', $alunos);
    }

    public function create(){
        $estados = Estado::query()->orderBy('id')->get();
        return view('alunos.create')->with('estados', $estados);
    }

    public function store(Request $request){

        $aluno = new Aluno();
        $aluno->matricula = $request->matricula;
        $aluno->nome = $request->nome;
        $aluno->sobrenome = $request->sobrenome;
        $aluno->dataNascimento = $request->dataNascimento;
        $aluno->sexo = $request->sexo;
        $aluno->rg = $request->rg;
        $aluno->estadoEmissor = $request->estadoEmissor;
        $aluno->orgaoEmisor = $request->orgaoEmisor;
        $aluno->dataExpedicao = $request->dataExpedicao;
        $aluno->telefone = $request->telefone;
        $aluno->email = $request->email;
        $aluno->endereco = $request->endereco;
        $aluno->complemento = $request->complemento;
        $aluno->bairro = $request->bairro;
        $aluno->cep = $request->cep;
        $aluno->cidade = $request->cidade;
        $aluno->estado = $request->estado;
        $aluno->save();

        return redirect('alunos');
    }
}
