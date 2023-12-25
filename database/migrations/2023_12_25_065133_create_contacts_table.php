<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->String("email")->nullable();
            $table->String("event_date")->nullable();
            $table->String("no_of_guests")->nullable();
            $table->String("eventType")->nullable();
            $table->String("hear_about_us")->nullable();
            $table->Text("lodging_handled")->nullable();
            $table->Text("address")->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
