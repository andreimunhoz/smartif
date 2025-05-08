<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    protected $table = 'chamados';

    protected $fillable = [
        'nome',
        'email',
        'descricao',
        'patrimonio',
        'sala',
        'ramal',
        'departamento_id',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
