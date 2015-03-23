<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnggarans extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggarans', function(Blueprint $table) {

            $table->increments('id');
            $table->string('nomor', 300);
            $table->integer('tahun')->unsigned();
            $table->integer('anggaran_identity_id')->unsigned();
            $table->integer('anggaran_keterkaitan_id')->unsigned();
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
        Schema::drop('anggarans');
    }

}
