<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problem', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('test_id'); // to identify for which test it belogs
            $table->string('file',35);
            $table->string('img',35);
            $table->string('text');
            $table->string('type',10);
            $table->string('solution_file'); // solution for Test type problem 
            $table->string('answer',2);     //  answer for Test type simle test(abc)
            $table->boolean('show_result')->default(1); // show solution or answer in the end?
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
        Schema::dropIfExists('problem');
    }
}
