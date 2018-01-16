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
            $table->text('major_output');
            $table->text('indicator_measure');
            $table->decimal('targets', 8,2);
            $table->decimal('jan_total', 8,2);
            $table->decimal('jan_accomplished', 8,2)->default(0);
            $table->decimal('feb_total', 8,2);
            $table->decimal('feb_accomplished', 8,2)->default(0);
            $table->decimal('mar_total', 8,2);
            $table->decimal('mar_accomplished', 8,2)->default(0);
            $table->decimal('apr_total', 8,2);
            $table->decimal('apr_accomplished', 8,2)->default(0);
            $table->decimal('may_total', 8,2);
            $table->decimal('may_accomplished', 8,2)->default(0);
            $table->decimal('jun_total', 8,2);
            $table->decimal('jun_accomplished', 8,2)->default(0);
            $table->integer('mfo_id')->unsigned();
            $table->foreign('mfo_id')->references('id')->on('performance_tables')->onDelete('cascade');
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
