<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimentoEstoque extends Model
{
    use HasFactory;

    protected $table = 'movimentos_estoque';

    protected $fillable = [
        'item_estoque_id',
        'chamado_id',
        'quantidade',
        'tipo',
    ];

    public function item()
    {
        return $this->belongsTo(ItemEstoque::class, 'item_estoque_id');
    }

    public function chamado()
    {
        return $this->belongsTo(Chamado::class);
    }
}
