<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content')->nullable();
            $table->string('cover_picture')->nullable();
            $table->longText('room_picture')->nullable();
            $table->smallInteger('room_size')->nullable();
            $table->string('bed_type')->nullable();
            $table->longText('facilities')->nullable();
            $table->float('price')->nullable();
            $table->smallInteger('adult')->default(2);
            $table->smallInteger('kid')->default(1);
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
        Schema::dropIfExists('rooms');
    }
}
