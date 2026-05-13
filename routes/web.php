<?php

use Illuminate\Support\Facades\Route;
use App\Models\Equipamento;
use App\Http\Controllers\EquipamentoController;

Route::get('/', function () {
    return redirect('/equipamentos');
});

// Rota principal do Inventário
Route::get('/equipamentos', [EquipamentoController::class, 'index']);

// Rota de Teste (mantida para gerar dados rápidos)
Route::get('/teste-hospital', function () {
    Equipamento::create([
        'patrimonio' => 'HOSP-' . rand(1000, 9999),
        'tipo' => 'Computador',
        'setor' => 'UTI',
        'modelo' => 'Dell Optiplex'
    ]);
    return redirect('/equipamentos');
});