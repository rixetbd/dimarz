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
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('articles')->default(0);
            $table->integer('attendance')->default(0);
            $table->integer('category')->default(0);
            $table->integer('employee')->default(0);
            $table->integer('faq')->default(0);
            $table->integer('gigpage')->default(0);
            $table->integer('mainpage')->default(0);
            $table->integer('seo')->default(0);
            $table->integer('salary')->default(0);
            $table->integer('settings')->default(0);
            $table->integer('users')->default(0);
            $table->integer('workprocess')->default(0);
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
        Schema::dropIfExists('role_permissions');
    }
};
