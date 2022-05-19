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
            $table->string('articulo', 50)->unique();
            $table->integer('cantidad');
            $table->integer('stock');
            $table->decimal('precio', 8, 2, true);
            $table->decimal('venta', 8, 2);
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
