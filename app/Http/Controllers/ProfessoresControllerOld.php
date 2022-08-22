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

        $professor = new Professor();

        $professor->nome = $request->nome;
        $professor->sobrenome = $request->sobrenome;
        $professor->cpf = $request->cpf;
        $professor->email = $request->email;
        $professor->celular = $request->celular;
        $professor->cep = $request->cep;
        $professor->endereco = $request->endereco;
        $professor->complemento = $request->complemento;
        $professor->bairro = $request->bairro;
        $professor->cidade = $request->cidade;
        $professor->estdado = $request->estado;
        $professor->save();

        return redirect('professores');
    }

    public function edit($id){
        $estados = Estado::query()->orderBy('id')->get();
        $professor = Professor::findOrFail($id);
        return view('professores.edit')
            ->with('estados', $estados)
            ->with('professor',$professor);
    }

    public function update(Request $request, $id){
        var_dump($request);
    }

    public function delete($id){

    }
}
