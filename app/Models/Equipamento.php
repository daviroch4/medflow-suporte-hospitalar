<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['patrimonio', 'tipo', 'setor', 'modelo'];

    // Relacionamento: Um equipamento tem muitos chamados
    public function chamados()
    {
        return $this->hasMany(Chamado::class);
    }
}