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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('company_name')->nullable();
            $table->string('website')->nullable();
            $table->string('service_name')->nullable();
            $table->string('event_date')->nullable();
            $table->string('event_start_time')->nullable();
            $table->string('event_end_time')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('event_type_name')->nullable();
            $table->text('message')->nullable();
            $table->string('assigned_to')->nullable();
            $table->text('note')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('consultations');
    }
};
