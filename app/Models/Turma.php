<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $table = 'turmas';

    protected $primaryKey = 'turPk';

    public $timestamps = false;

    protected $fillable = [
        'turNome',
    ];

    public function alunos (){

        return $this->hasMany(Aluno::class, 'aluTurmaFk', 'turPk');
    }

}
