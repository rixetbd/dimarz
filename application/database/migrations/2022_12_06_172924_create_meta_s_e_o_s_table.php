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
        Schema::create('meta_s_e_o_s', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title');
            $table->string('meta_author');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->string('meta_thumbnail')->nullable();
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
        Schema::dropIfExists('meta_s_e_o_s');
    }
};
