<?php

namespace App\Http\Controllers;
use App\Models\Turma;

use Illuminate\Http\Request;

class TurmaController extends Controller
{   
    protected $turma;

    public function __construct(Turma $turma)
    {
        $this->turma = $turma;
    }
    public function index(){
        
        $turmas = $this->turma->all();

        return  view('turma.classe',  compact('turmas'));
    }
}
