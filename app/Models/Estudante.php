<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;

    protected $fillable = [
        'responsavel',
        'cresponsavel',
        'nascimento',
        'aluno',
        'sexo',
        'turno',
        'paragem',
        'escola_id',
    ];

    public function escola(){
        return $this->belongsTo(Escola::class);
    }


}
