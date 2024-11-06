<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlunoResource;
use App\Models\Turma;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function  index(Request $request){

        // dd($request->idTurma);

        if(!$request->idTurma){
            return response()->json(['error' => 'sem id de turma chegando'], 404);
        }


        $turma = Turma::find($request->idTurma);


        if(!$turma){
            return response()->json(['error' => 'turma não encontrada'], 404);
        };

        $alunos = $turma->alunos;

        //  dd($alunos);

        // dd($alunos);

        return AlunoResource::collection($alunos);
    }
}
