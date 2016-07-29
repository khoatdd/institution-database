<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessorSecondaryDataValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessor_secondary_data_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('assessor_id')->unsigned();
            $table->integer('horizontal_attribute_id')->unsigned();
            $table->string('value');
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
        Schema::drop('assessor_secondary_data_values');
    }
}
