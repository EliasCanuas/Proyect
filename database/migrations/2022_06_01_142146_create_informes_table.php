<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->string('producto', 50);
            $table->decimal('precio', 8, 2, true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('informes');
    }
};
