<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descricao', 'prioridade', 'status', 'equipamento_id'];

    // Relacionamento: Um chamado pertence a um equipamento
    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class);
    }
}