<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnggaranKeterkaitans extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggaran_keterkaitans', function(Blueprint $table) {

            $table->increments('id');
            $table->integer('anggaran_id')->unsigned();
            $table->string('type', 45);
            $table->string('sub_type', 45);
            $table->string('code', 45)->nullable();
            $table->text('description');
            $table->string('nilai', 100)->nullable();
            $table->integer('priority')->default(0);
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
        Schema::drop('anggaran_keterkaitans');
    }

}
