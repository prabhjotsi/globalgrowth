<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNavBarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav_bar', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('logo')->nullable();
          $table->string('logo_name')->nullable();
          $table->string('home')->nullable();
          $table->string('home_style_1')->nullable();
          $table->string('home_style_2')->nullable();
          $table->string('home_style_3')->nullable();
          $table->string('about_us')->nullable();
          $table->string('services')->nullable();
          $table->string('faq')->nullable();
          $table->string('contact')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nav_bar');
    }
}
