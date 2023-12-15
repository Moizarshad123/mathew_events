<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColsInVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('venues', function (Blueprint $table) {
            $table->String("chain")->nullable();
            $table->String("built")->nullable();
            $table->String("total_meeting_space")->nullable();
            $table->String("venue_type")->nullable();
            $table->String("brand")->nullable();
            $table->String("rennovated")->nullable();
            $table->String("guest_rooms")->nullable();
            $table->String("ratings")->nullable();
            $table->Text("room_features")->nullable();
            $table->Text("business_services")->nullable();
            $table->Text("recreational_activities")->nullable();
            $table->Text("venue_accessiblity")->nullable();
            $table->Text("facilities")->nullable();
            $table->String("distance_from_airport")->nullable();
            $table->Text("parking")->nullable();
            $table->String("largest_room")->nullable();
            $table->String("second_largest_room")->nullable();
            $table->String("meeting_rooms")->nullable();
            $table->String("total_guest_rooms")->nullable();
            $table->String("suites")->nullable();
            $table->Text("description")->nullable();
            $table->String("cancellation_policy")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venues', function (Blueprint $table) {
            //
        });
    }
}
