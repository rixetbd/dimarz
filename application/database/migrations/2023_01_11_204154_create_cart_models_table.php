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
        Schema::create('cart_models', function (Blueprint $table) {
            $table->id();
            $table->string('c_fname');
            $table->string('c_lname');
            $table->string('c_email');
            $table->string('c_phone')->nullable();
            $table->string('company')->nullable();
            $table->string('website')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->text('brief')->nullable();
            $table->string('budget')->nullable();
            $table->string('payment')->nullable();
            $table->string('invoice')->nullable();
            $table->string('service_id')->nullable();
            $table->string('category')->nullable();
            $table->string('package')->nullable();
            $table->string('coupon')->nullable();
            $table->string('is_custom')->nullable();
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
        Schema::dropIfExists('cart_models');
    }
};
