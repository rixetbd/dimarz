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
        Schema::create('leads_for_markets', function (Blueprint $table) {
            $table->id();
            $table->string('person_fname');
            $table->string('person_lname')->nullable();
            $table->string('title')->default('N/A');
            $table->string('p_email')->default('N/A');
            $table->string('phone_one')->default('N/A');
            $table->string('phone_two')->default('N/A');
            $table->string('company_name')->nullable();
            $table->string('industry')->default('N/A');
            $table->string('niche')->default('N/A');
            $table->string('company_size')->default('N/A');
            $table->string('company_email')->default('N/A');
            $table->string('company_address')->default('N/A');
            $table->string('revenue')->default('N/A');
            $table->string('zip_code')->nullable();
            $table->string('city')->default('N/A');
            $table->string('state')->default('N/A');
            $table->string('country')->default('N/A');
            $table->longText('website')->default('N/A');
            $table->longText('linkedin')->default('N/A');
            $table->longText('instagram')->default('N/A');
            $table->longText('facebook')->default('N/A');
            $table->longText('source_link')->default('N/A');
            $table->longText('other_info')->default('N/A');
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
        Schema::dropIfExists('leads_for_markets');
    }
};
