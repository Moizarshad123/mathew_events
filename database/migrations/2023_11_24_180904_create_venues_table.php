<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->String("company")->nullable();
            $table->String("city")->nullable();
            $table->String("state")->nullable();
            $table->String("mailing_address")->nullable();
            $table->String("lat")->nullable();
            $table->String("lng")->nullable();
            $table->String("phone")->nullable();
            $table->String("website")->nullable();
            $table->String("zip")->nullable();
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
        Schema::dropIfExists('venues');
    }
}
