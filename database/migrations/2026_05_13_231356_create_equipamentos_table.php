<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->id();
            $table->string('patrimonio')->unique(); // Ex: HOSP-1234
            $table->string('tipo'); // Ex: Computador, Impressora, Monitor, Nobreak
            $table->string('setor'); // Ex: UTI, Emergência, Recepção, Faturamento
            $table->string('modelo')->nullable(); // Ex: Dell Optiplex 3020
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('equipamentos');
    }
};