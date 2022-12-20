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
        Schema::create('gardeners', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            // $table->boolean('instock_status')->nullable();
            $table->string('name');
            $table->string('photo')->nullable(true);
            $table->string('position')->default("Gardener");
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
            $table->longText('experience');
            $table->longText('skill');
            $table->string('pet');
            $table->longText('pet_note')->nullable(true);
            $table->string('vaccine');
            $table->longText('remark')->nullable(true);
            $table->longText('note')->nullable(true);
            $table->string('stockstatus');
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
        Schema::dropIfExists('gardeners');
    }
};
