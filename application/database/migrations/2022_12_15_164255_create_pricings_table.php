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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->integer('gig_id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('duration');
            $table->integer('name_one');
            $table->integer('name_one_index')->default(1);
            $table->integer('name_two');
            $table->integer('name_two_index')->default(2);
            $table->integer('name_three');
            $table->integer('name_three_index')->default(3);
            $table->integer('author');
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
        Schema::dropIfExists('pricings');
    }
};
