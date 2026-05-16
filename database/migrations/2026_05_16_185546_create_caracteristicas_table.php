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
        Schema::create('caracteristicas', function (Blueprint $table) {
            
            $table->id();

            $table->unsignedInteger('sheet_id');

            $table->foreign('sheet_id')
                ->references('id_sheet')
                ->on('sheets')
                ->onDelete('cascade');

            $table->integer('AFOR')->nullable();
            $table->integer('ADES')->nullable();
            $table->integer('ACON')->nullable();
            $table->integer('AINT')->nullable();
            $table->integer('APER')->nullable();
            $table->integer('AVON')->nullable();

            $table->integer('PAMB')->nullable();
            $table->integer('PAMF')->nullable();
            $table->integer('PACR')->nullable();
            $table->integer('PATL')->nullable();
            $table->integer('PBRI')->nullable();
            $table->integer('PESQ')->nullable();
            $table->integer('PFUR')->nullable();

            $table->integer('PART')->nullable();
            $table->integer('PCOC')->nullable();
            $table->integer('PCOD')->nullable();
            $table->integer('PEPL')->nullable();
            $table->integer('PINV')->nullable();
            $table->integer('PLAD')->nullable();
            $table->integer('PPRS')->nullable();

            $table->integer('PCAC')->nullable();
            $table->integer('PCIN')->nullable();
            $table->integer('PCME')->nullable();
            $table->integer('PCMA')->nullable();
            $table->integer('PCMI')->nullable();
            $table->integer('PCPO')->nullable();

            $table->integer('PBLE')->nullable();
            $table->integer('PCRI')->nullable();
            $table->integer('PDIP')->nullable();
            $table->integer('PTIM')->nullable();
            $table->integer('PTUI')->nullable();
            $table->integer('PLID')->nullable();

            $table->integer('QARM')->nullable();
            $table->integer('QBEL')->nullable();
            $table->integer('QCOR')->nullable();
            $table->integer('QCAS')->nullable();
            $table->integer('QDDM')->nullable();
            $table->integer('QBRX')->nullable();
            $table->integer('QGEL')->nullable();
            $table->integer('QGEN')->nullable();
            $table->integer('QTRA')->nullable();
            $table->integer('QSEA')->nullable();
            $table->integer('QADA')->nullable();
            $table->integer('QFDA')->nullable();
            $table->integer('QJDP')->nullable();
            $table->integer('QLAB')->nullable();
            $table->integer('QMAL')->nullable();
            $table->integer('QCNH')->nullable();
            $table->integer('QMMF')->nullable();

            $table->integer('DANT')->nullable();
            $table->integer('DAZA')->nullable();
            $table->integer('DFEI')->nullable();
            $table->integer('DPCR')->nullable();
            $table->integer('DCOV')->nullable();
            $table->integer('DCRE')->nullable();
            $table->integer('DMDS')->nullable();
            $table->integer('DPSI')->nullable();
            $table->integer('DPSE')->nullable();
            $table->integer('DPRE')->nullable();
            $table->integer('DPRO')->nullable();
            $table->integer('DTDA')->nullable();
            $table->integer('DIRR')->nullable();
            $table->integer('DSNO')->nullable();
            $table->integer('DPLH')->nullable();
            $table->integer('DVRU')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracteristicas');
    }
};
