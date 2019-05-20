<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug', function (Blueprint $table) {
            $table->increments('drug_id');
            $table->string('drug_name');
            $table->string('drug_image');
            $table->string('drug_from');
            $table->text('drug_distrebution');
            $table->string('drug_warranty');
            $table->tinyInteger('drug_status');
            $table->integer('catedrug_id');
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
        Schema::dropIfExists('drug');
    }
}
