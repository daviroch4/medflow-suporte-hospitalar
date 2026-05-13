<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->enum('prioridade', ['baixa', 'media', 'alta', 'critica'])->default('baixa');
            $table->enum('status', ['aberto', 'em_atendimento', 'concluido'])->default('aberto');
            
            // Relacionamento: O chamado pertence a um equipamento
            $table->foreignId('equipamento_id')->constrained('equipamentos')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chamados');
    }
};