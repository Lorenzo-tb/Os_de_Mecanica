<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('telefone', 20);
            $table->string('email', 50);
            $table->string('cpf', 20);
            $table->string('endereco', 200);
            $table->unsignedBigInteger('carro_id'); 
            $table->foreign('carro_id')->references('id')->on('carros'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
