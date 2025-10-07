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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('usu_nombre');
            $table->string('usu_ap_pat');
            $table->string('usu_ap_mat');
            $table->string('usu_correo');
            $table->string('usu_cont');
            $table->string('usu_direc');
            $table->string('usu_sexo');
            $table->string('usu_tipo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
