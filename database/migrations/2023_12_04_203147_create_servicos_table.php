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
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->date('entrada');
            $table->text('defeito');
            $table->text('conserto');
            $table->double('total');
            $table->tinyInteger('aprovado');
            $table->date('pronto');
            $table->date('entregue');
            $table->unsignedBigInteger('equipe_id'); 
            $table->foreign('equipe_id')->references('id')->on('equipes');
            $table->unsignedBigInteger('carro_id'); 
            $table->foreign('carro_id')->references('id')->on('carros'); 
            $table->unsignedBigInteger('peca_id'); 
            $table->foreign('peca_id')->references('id')->on('pecas'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
