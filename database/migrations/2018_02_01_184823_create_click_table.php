<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('click', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ua');
            $table->ipAddress('ip');
            $table->string('ref');
            $table->string('param1');
            $table->string('param2');
            $table->integer('error')->default(0);
            $table->integer('bad_domain')->default(0);
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
        Schema::dropIfExists('click');
    }
}
