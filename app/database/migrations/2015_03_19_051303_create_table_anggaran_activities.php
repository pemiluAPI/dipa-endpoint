<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnggaranActivities extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggaran_activities', function(Blueprint $table) {

            $table->increments('id');
            $table->integer('anggaran_id')->unsigned();
            $table->string('code', 45);
            $table->text('description');
            $table->string('anggaran_keterkaitan_code', 45)->nullable();
            $table->string('volume', 100)->nullable();
            $table->string('satuan', 100)->nullable();
            $table->string('nilai', 100)->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anggaran_activities');
    }

}
