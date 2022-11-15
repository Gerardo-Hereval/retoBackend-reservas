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
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',64);
            $table->text('descripcion')->nullable();
            $table->string('tipo');
            $table->string('status')->nullable();
            $table->double('precio_unitario',14,2)->nullable();
            $table->double('popularidad',14,2)->nullable();
            $table->integer('cupo');
            $table->text('img')->nullable();
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
        Schema::dropIfExists('activity');
    }
};
