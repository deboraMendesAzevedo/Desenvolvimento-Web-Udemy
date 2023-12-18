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
        Schema::create('locacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('carro_id');
            $table->dateTime('data_periodo_inicial');
            $table->dateTime('data_final_previsto_periodo');
            $table->dateTime('data_final_realizado_periodo');
            $table->float('valor_diaria', 8,2);
            $table->integer('km_inicial');
            $table->integer('km_final');
            $table->timestamps();


            // foreing key

            $table->foreing('cliente_id')->references('id')->on('clientes');
            $table->foreing('carro_id')->references('id')->on('carros');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locacoes');
    }
};
