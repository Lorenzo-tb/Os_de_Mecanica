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
        Schema::create('servico_has_peca', function (Blueprint $table) {
            $table->unsignedBigInteger('peca_id'); 
            $table->foreign('peca_id')->references('id')->on('pecas');
            $table->unsignedBigInteger('servico_id'); 
            $table->foreign('servico_id')->references('id')->on('servicos'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servico_has_peca');
    }
};
