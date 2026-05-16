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
        Schema::create('sheets', function (Blueprint $table) {
            
            $table->increments('id_sheet');
            
            $table->integer('tipo');

            $table->text('nome');
            
            $table->integer('idade')->nullable();
            $table->text('aniversario')->nullable();

            $table->text('alcunha')->nullable();

            $table->text('profissao_atual')->nullable();
            $table->text('ex_profissoes')->nullable();

            $table->text('experiencias')->nullable();
            $table->text('hobbies')->nullable();
            $table->text('aparencia')->nullable();

            $table->text('resumo')->nullable();
            $table->longText('historia')->nullable();

            $table->text('habilidade_dois')->nullable();
            $table->text('habilidade_um')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheets');
    }
};
