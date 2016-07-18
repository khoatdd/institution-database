<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSarPrimaryDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sar_primary_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sar_id')->unsigned()->index();
            $table->integer('section_id')->unsigned()->index();
            $table->string('name');
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
        Schema::drop('sar_primary_datas');
    }
}
