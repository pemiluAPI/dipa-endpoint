<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnggaranIdentities extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggaran_identities', function(Blueprint $table) {

            $table->increments('id');
            $table->integer('anggaran_id')->unsigned();
            $table->string('kementrian_code', 45);
            $table->string('kementrian_name', 300);
            $table->string('unit_code', 45);
            $table->string('unit_name', 300);
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
        Schema::drop('anggaran_identities');
    }

}
