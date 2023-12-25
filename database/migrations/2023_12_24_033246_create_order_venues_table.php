<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_venues', function (Blueprint $table) {
            $table->id();
            $table->Integer("venue_request_id")->nullable();
            $table->Integer("user_id")->nullable();
            $table->Integer("venue_id")->nullable();
            $table->String("venue")->nullable();
            $table->String("city")->nullable();
            $table->String("state")->nullable();
            $table->Text("image")->nullable();
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
        Schema::dropIfExists('order_venues');
    }
}
