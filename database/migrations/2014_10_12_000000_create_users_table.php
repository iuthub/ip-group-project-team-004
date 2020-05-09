<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',35);
            $table->string('bio', 230);
            $table->string('img',35);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('passport_num');
            $table->integer('phone_num');
            $table->integer('work');
            $table->integer('subs');
            $table->integer('survived');
            $table->boolean('show_subs')->default(0);
            $table->boolean('show_work')->default(0);
            $table->boolean('show_bio')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
