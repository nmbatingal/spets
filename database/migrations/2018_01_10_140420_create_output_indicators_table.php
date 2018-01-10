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
                $table->integer('jan_total');
                $table->integer('jan_accomplished')->nullable();
                $table->integer('feb_total');
                $table->integer('feb_accomplished')->nullable();
                $table->integer('mar_total');
                $table->integer('mar_accomplished')->nullable();
                $table->integer('apr_total');
                $table->integer('apr_accomplished')->nullable();
                $table->integer('may_total');
                $table->integer('may_accomplished')->nullable();
                $table->integer('jun_total');
                $table->integer('jun_accomplished')->nullable();
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
