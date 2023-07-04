<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_oficina',
        'id_veiculo',
        'servico',
        'comentario',
    ];

    public function oficina(){
        return $this->belongsto(Oficina::class, 'id_oficina');
    }

    public function veiculo(){
        return $this->belongsTo(Veiculo::class, 'id_veiculo');
    }

}
