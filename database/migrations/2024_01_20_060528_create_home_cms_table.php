<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeCmsTable extends Migration
{

    public function up()
    {
        Schema::create('home_cms', function (Blueprint $table) {
            $table->id();
            $table->String("heading")->nullable();
            $table->String("sub_heading")->nullable();
            $table->String("banner_image")->nullable();
            $table->String("section_one_heading")->nullable();
            $table->Text("section_one_content")->nullable();
            $table->String("section_two_heading")->nullable();
            $table->Text("section_two_content")->nullable();
            $table->String("section_two_image")->nullable();
            $table->String("blog_one_heading")->nullable();
            $table->Text("blog_one_content")->nullable();
            $table->String("blog_one_image")->nullable();
            $table->String("blog_two_heading")->nullable();
            $table->Text("blog_two_content")->nullable();
            $table->String("blog_two_image")->nullable();
            $table->String("blog_three_heading")->nullable();
            $table->Text("blog_three_content")->nullable();
            $table->String("blog_three_image")->nullable();    
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('home_cms');
    }
}
