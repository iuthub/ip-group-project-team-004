<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notify', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('user_id'); // sender id
            $table->smallInteger('receiver_id'); // receiver id
            $table->string('message'); // notification message
            $table->string('url',25); // we can also use url for event notification
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
        Schema::dropIfExists('notify');
    }
}
