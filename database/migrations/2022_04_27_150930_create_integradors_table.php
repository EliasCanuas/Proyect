<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integradors', function (Blueprint $table) {
            $table->id();
            $table->String('usuario', 20)->unique();
            $table->string('contraseña', 50)->unique();
            $table->string('articulo', 50)->unique();
            $table->int('stock');
            $table->decimal('precio', 4, 2, true);
            $table->int('venta');
            $table->int('facturas')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('integradors');
    }
};
