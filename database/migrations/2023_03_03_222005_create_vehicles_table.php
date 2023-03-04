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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('city');
            $table->string('make');
            $table->string('model');
            $table->integer('year');
            $table->integer('km');
            $table->longText('description');
            $table->boolean('transmission'); /* 0 - manual, 1 - automatico */
            $table->string('phone');
            $table->float('price', 10, 2);
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
        
        Schema::dropIfExists('vehicles');
    }
};
