<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index()
    {
        $classes = Classe::query()->orderBy('id')->get();

        $series = array(
            'Selecione',
            'Ensino fundamental I',
            'Ensino fundamental II',
            'Ensino médio'
        );

        return view('classe.index')
            ->with('series', $series)
            ->with('classes', $classes);
    }

    public function store(Request $request, Classe $classe)
    {

        $classe->nome = $request->nome;
        $classe->serie = $request->serie;
        $classe->save();

        return redirect('classes');
    }
}
