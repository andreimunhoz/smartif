<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemEstoque extends Model
{
    use HasFactory;

    protected $table = 'itens_estoque';

    protected $fillable = [
        'nome',
        'quantidade',
        'unidade',
        'data_validade',
    ];

    public function movimentos()
    {
        return $this->hasMany(MovimentoEstoque::class);
    }
}
