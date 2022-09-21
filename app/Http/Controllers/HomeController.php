<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Professor;

class HomeController extends Controller
{

    public function index(){
        $totalAlunos = Aluno::count();
        $totalProfessores = Professor::count();
        return view('home',[
            'totalAlunos' => $totalAlunos,
            'totalProfessores' => $totalProfessores
        ]);
    }
}
