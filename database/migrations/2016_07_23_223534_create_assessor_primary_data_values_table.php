<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessorPrimaryDataValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessor_primary_data_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('assessor_id')->unsigned();
            $table->integer('assessor_primary_data_list_id')->unsigned();
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
        Schema::drop('assessor_primary_data_values');
    }
}
