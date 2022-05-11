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
            $table->integer('stock');
            $table->decimal('precio', 4, 2, true);
            $table->integer('venta');
            $table->integer('facturas')->unique();
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
