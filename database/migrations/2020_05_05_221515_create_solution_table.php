<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solution', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); // solver id
            $table->foreignId('problem_id'); // to identify for which problem it belogs
            $table->string('file',35);
            $table->string('text',35);  //  comment
            $table->string('percent',5);  // percent of solution (grade) 
            $table->string('solution_file'); // solution for Test type problem 
            $table->string('answer',2);     //  answer for Test type simle test(abc)
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
        Schema::dropIfExists('solution');
    }
}
