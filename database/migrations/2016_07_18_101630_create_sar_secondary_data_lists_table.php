<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSarSecondaryDataListsTable extends Migration
{
    public $timestamps = false;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sar_secondary_data_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vertical_attribute_id')->unsigned()->index();
            $table->integer('horizontal_attribute_id')->unsigned()->index();
            $table->integer('section_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sar_secondary_data_lists');
    }
}
