<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorizontalAttributesTable extends Migration
{
    public $timestamps = false;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horizontal_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('child_table_id')->unsigned()->index();
            $table->string('name');
            $table->integer('order')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('horizontal_attributes');
    }
}
