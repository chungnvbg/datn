<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Client', function (Blueprint $table) {
            $table->increments('cli_id');
            $table->string('cli_name');
            $table->integer('cli_age');
            $table->string('cli_phone');
            $table->string('cli_email');
            $table->string('cli_password');
            $table->text('cli_address');
            $table->integer('cli_sex');
            $table->tinyInteger('cli_level');
            $table->tinyInteger('cli_status');
            $table->integer('cate_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('Client');
    }
}
