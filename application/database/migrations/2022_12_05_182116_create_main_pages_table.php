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
        Schema::create('main_pages', function (Blueprint $table) {
            $table->id();
            $table->integer('subcategory_id');
            $table->string('page_title');
            $table->string('page_sub_title');
            $table->json('about_service')->nullable();
            $table->integer('work_article')->nullable();
            $table->integer('faq_id')->nullable();
            $table->integer('working_process')->nullable();
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
        Schema::dropIfExists('main_pages');
    }
};
