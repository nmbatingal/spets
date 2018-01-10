<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutputIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        
        if (Schema::hasTable('output_indicators')) {
            Schema::dropIfExists('output_indicators');
        } else {
            Schema::create('output_indicators', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('targets');
                $table->integer('mfo_sub_id')->unsigned();
                $table->foreign('mfo_sub_id')->references('id')->on('major_sub_outputs')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('output_indicators');
    }
}
