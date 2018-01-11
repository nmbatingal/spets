<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformanceTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('performance_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->text('textfield')->nullable();
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('major_outputs', function($table) {
            $table->integer('perform_id')->after('title')->unsigned();
            $table->foreign('perform_id')->references('id')->on('performance_tables')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('major_outputs');
        Schema::dropIfExists('performance_tables');
    }
}
