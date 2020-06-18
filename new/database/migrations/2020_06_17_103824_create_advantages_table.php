<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvantagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advantages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ka');
            $table->string('title_en');
            $table->text('content_ka');
            $table->text('content_en');
            $table->string('point1_ka');
            $table->string('point1_en');
            $table->string('point2_ka');
            $table->string('point2_en');
            $table->string('point3_ka');
            $table->string('point3_en');
            $table->string('icon1');
            $table->string('icon2');
            $table->string('icon3');
            $table->string('icon4');
            $table->string('txt1_ka');
            $table->string('txt1_en');
            $table->string('txt2_ka');
            $table->string('txt2_en');
            $table->string('txt3_ka');
            $table->string('txt3_en');
            $table->string('txt4_ka');
            $table->string('txt4_en');
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
        Schema::dropIfExists('advantages');
    }
}
