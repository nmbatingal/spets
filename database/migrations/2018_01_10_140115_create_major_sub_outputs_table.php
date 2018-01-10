<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMajorSubOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
         
        if (Schema::hasTable('major_sub_outputs')) {
            Schema::dropIfExists('major_sub_outputs');
        } else {
            Schema::create('major_sub_outputs', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('level');
                $table->integer('sublevel')->nullable();
                $table->string('subtitle', 300);
                $table->integer('total')->nullable();
                $table->integer('mfo_id')->unsigned();
                $table->foreign('mfo_id')->references('id')->on('major_outputs')->onDelete('cascade');
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
        Schema::dropIfExists('major_sub_outputs');
    }
}
