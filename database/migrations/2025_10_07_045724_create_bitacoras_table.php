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
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id();
            $table->string('usu_nombre');
            $table->string('usu_ap_pat');
            $table->string('usu_ap_mat');
            $table->enum('usu_tipo', ['admin','cliente','empleado']);
            $table->string('accion');
            $table->string('usuario');
            $table->dateTime('fech_hora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitacoras');
    }
};
