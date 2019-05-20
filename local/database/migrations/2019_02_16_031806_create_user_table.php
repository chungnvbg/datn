<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');         
            $table->string('name');         
            $table->integer('age');         
            $table->integer('phone');         
            $table->string('email');         
            $table->string('password');         
            $table->string('address');         
            $table->string('sex');         
            $table->string('avatar');         
            $table->tinyinteger('level');        
            $table->integer('cate_id'); 
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
        Schema::dropIfExists('user');
    }
}
