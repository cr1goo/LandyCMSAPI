<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockContentParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_content_params', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('block_content_id')->unsigned();
            $table->integer('content_type_param_id')->unsigned();
            $table->text('value');

            $table->foreign('block_content_id')->references('id')->on('blocks_contents');
            $table->foreign('content_type_param_id')->references('id')->on('content_type_params');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block_content_params');
    }
}
