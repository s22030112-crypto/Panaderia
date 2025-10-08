<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('productos_ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pro');
            $table->unsignedBigInteger('id_venta');
            $table->foreign('id_pro')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('id_venta')->references('id')->on('ventas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('productos_ventas');
    }
};
