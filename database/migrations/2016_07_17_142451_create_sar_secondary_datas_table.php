<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSarSecondaryDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sar_secondary_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sar_id')->unsigned()->index();
            $table->integer('vertical_attribute_id')->unsigned()->index();
            $table->integer('horizontal_attribute_id')->unsigned()->index();
            $table->integer('child_table_id')->unsigned()->index();
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
        Schema::drop('sar_secondary_datas');
    }
}
