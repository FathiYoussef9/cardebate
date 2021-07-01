<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_v_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imageUrl');
            $table->unsignedBigInteger('idversion');
            $table->foreign('idversion')->references('id')->on('versions');         
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
        Schema::dropIfExists('img_v_s');
    }
}
