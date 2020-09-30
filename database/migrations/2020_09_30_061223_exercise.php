<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Exercise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('exercise', function (Blueprint $table) {
          $table->id();
          $table->string('user_id', 100);
          $table->string('description', 100);
          $table->string('duration',100);
          $table->timestamp('date', 0);
          $table->timestamps(0);
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
