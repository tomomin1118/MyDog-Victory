<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->int('user_id');
            $table->string('name');
            $table->date('birthday_year');
            $table->int('age');
            $table->string('breed');
            $table->string('personality');
            $table->string('image_path');
            $table->string('comment');
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
        Schema::dropIfExists('dogs');
    }
}
