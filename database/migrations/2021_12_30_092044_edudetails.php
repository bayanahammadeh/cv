<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Edudetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('edudetails');
        Schema::create('edudetails', function (Blueprint $table) {
            $table->id('id');
            $table->string('edu_name');
            $table->string('detail');
            //$table->foreignId('education_id')->constrained();
            $table->foreignId('education_id')->constrained('educations');
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
        //
    }
}
