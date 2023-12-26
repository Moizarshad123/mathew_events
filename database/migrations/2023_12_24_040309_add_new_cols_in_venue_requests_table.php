<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColsInVenueRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('venue_requests', function (Blueprint $table) {
            $table->String("organization")->nullable();
            $table->String("commission_rate")->nullable();
            $table->String("client_organization_name")->nullable();
            $table->String("client_organization")->nullable();
            $table->String("industry")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venue_requests', function (Blueprint $table) {
            //
        });
    }
}
