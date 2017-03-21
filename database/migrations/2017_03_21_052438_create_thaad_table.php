<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThaadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thaad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
            $table->string('tel', 11);
            $table->string('addr', 100);
            $table->string('contents', 2000)->nullable();;
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
        Schema::dropIfExists('thaad');
    }
}
