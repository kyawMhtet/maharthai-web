<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nannies', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            // $table->boolean('instock_status')->nullable();
            $table->string('name');
            $table->string('photo');
            $table->string('position');
            $table->string('date_of_birth');
            $table->string('nationality');
            $table->string('religion');
            $table->string('weight');
            $table->string('height');
            $table->string('salary');
            $table->string('language');
            $table->string('status');
            $table->string('full_part');
            $table->string('live_in_out');
            $table->string('experience');
            $table->string('pet');
            $table->string('dog_small');
            $table->string('dog_big');
            $table->string('vaccine');
            $table->string('note')->nullable();
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
        Schema::dropIfExists('nannies');
    }
};
