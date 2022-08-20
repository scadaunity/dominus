<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Estado;
use Illuminate\Http\Request;

class ProfessoresController extends Controller
{
    public function index(){
        $professores = Professor::query()->orderBy('nome')->get();
        return view('professores.index')->with('professores', $professores);
    }

    public function create(){
        $estados = Estado::query()->orderBy('id')->get();
        return view('professores.create')->with('estados', $estados);
    }

    public function store(Request $request){

        $professer = new Professor();

        $professer->nome = $request->nome;
        $professer->sobrenome = $request->sobrenome;
        $professer->cpf = $request->cpf;
        $professer->email = $request->email;
        $professer->celular = $request->celular;
        $professer->cep = $request->cep;
        $professer->endereco = $request->endereco;
        $professer->complemento = $request->complemento;
        $professer->bairro = $request->bairro;
        $professer->cidade = $request->cidade;
        $professer->estdado = $request->estado;
        $professer->save();

        return redirect('professores');
    }

    public function edit($id){
        $estados = Estado::query()->orderBy('id')->get();
        $professor = Professor::findOrFail($id);
        return view('professores.edit')
            ->with('estados', $estados)
            ->with('professor',$professor);
    }

    public function update(){

    }

    public function delete($id){

    }
}
