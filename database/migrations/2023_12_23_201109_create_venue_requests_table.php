<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenueRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue_requests', function (Blueprint $table) {
            $table->id();
            $table->Integer("user_id")->nullable();
            $table->String("event_type")->nullable();
            $table->Date("arriving_date")->nullable();
            $table->Date("departure_date")->nullable();
            $table->String("is_event_dates_flexible")->nullable();
            $table->String("event_need_guest_rooms")->nullable();
            $table->String("guest_rooms_per_night")->nullable();
            $table->String("people_per_guest_room")->nullable();
            $table->String("event_need_meeting_rooms")->nullable();
            $table->String("attendees_per_day")->nullable();
            $table->Text("description")->nullable();
            $table->String("planning_for_another_organization")->nullable();
            $table->String("name")->nullable();
            $table->String("email")->nullable();
            $table->String("phone")->nullable();
            $table->String("city")->nullable();
            $table->String("country")->nullable();
            $table->Date("hear_from_venues_by")->nullable();
            $table->String("contacted_via")->nullable();
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
        Schema::dropIfExists('venue_requests');
    }
}
