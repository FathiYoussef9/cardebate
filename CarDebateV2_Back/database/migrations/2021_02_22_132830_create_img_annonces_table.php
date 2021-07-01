<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_annonces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imageUrl');
            $table->unsignedBigInteger('idAnnonce');
            $table->foreign('idAnnonce')->references('id')->on('annonces');  
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
        Schema::dropIfExists('img_annonces');
    }
}
