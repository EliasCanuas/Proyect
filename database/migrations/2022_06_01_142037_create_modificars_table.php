<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('modificars', function (Blueprint $table) {
            $table->id();
            $table->string('producto', 50);
            $table->integer('cantidad');
            $table->decimal('precio', 8, 2, true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('modificars');
    }
};
