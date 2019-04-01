<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->String('question');
            $table->String('option_a');
            $table->String('option_b');
            $table->String('option_c');
            $table->String('option_d');
            $table->char('answer');
            $table->integer('respondida');
            $table->integer('nivel');
            $table->String('tema');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
