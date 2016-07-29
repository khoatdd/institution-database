<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSarSecondaryDataValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sar_secondary_data_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sar_secondary_data_list_id')->unsigned()->index();
            $table->float('value');
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
        Schema::drop('sar_secondary_data_values');
    }
}
