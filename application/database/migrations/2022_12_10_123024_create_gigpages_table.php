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
        Schema::create('gigpages', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('mainpage_id');
            $table->string('title');
            $table->string('slug');
            $table->string('sub_title');
            $table->text('short_description');
            $table->integer('easy_steps')->nullable();
            $table->string('overview_title');
            $table->text('overview_info');
            $table->integer('pricing')->nullable();
            $table->text('why_us');
            $table->integer('faq_id')->nullable();
            $table->integer('meta_info')->nullable();
            $table->integer('author');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('gigpages');
    }
};
