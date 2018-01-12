<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->char('acronym', 10)->nullable();
            $table->string('div_name', 50)->nullable();
            $table->string('div_head', 50)->nullable();
            $table->string('position', 50)->nullable();
            $table->timestamps();
        });

        /*Schema::table('users', function($table) {
            $table->integer('division_unit')->unsigned()->after('mobile_number')->nullable();
            $table->foreign('division_unit')->references('id')->on('offices')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
