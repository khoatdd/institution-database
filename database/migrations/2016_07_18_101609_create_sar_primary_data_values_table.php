<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSarPrimaryDataValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sar_primary_data_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sar_id');
            $table->integer('sar_primary_data_list_id');
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
        Schema::drop('sar_primary_data_values');
    }
}
