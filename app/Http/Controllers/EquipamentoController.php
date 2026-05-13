<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    public function index()
    {
        // Busca todos os equipamentos do banco
        $equipamentos = Equipamento::all();

        // Retorna a view 'equipamentos.index' passando a lista
        return view('equipamentos.index', compact('equipamentos'));
    }
}