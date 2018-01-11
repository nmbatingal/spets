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
        
        Schema::create('output_indicators', function (Blueprint $table) {
            $table->increments('id');
            $table->text('indicator');
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
            $table->integer('mfo_id')->unsigned();
            $table->foreign('mfo_id')->references('id')->on('major_outputs')->onDelete('cascade');
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
        Schema::dropIfExists('output_indicators');
    }
}
