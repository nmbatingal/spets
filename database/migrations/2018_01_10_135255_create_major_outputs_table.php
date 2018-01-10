<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMajorOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        
            
        if (Schema::hasTable('major_outputs')) {
            Schema::dropIfExists('major_outputs');
        } else {
            Schema::create('major_outputs', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title', 200);
                $table->integer('owner_id')->unsigned();
                $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('major_outputs');
    }
}
