<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_requests', function (Blueprint $table) {
            $table->id();
            $table->String("supplier_name")->nullable();
            $table->String("supplier_phone")->nullable();
            $table->Text("supplier_address1")->nullable();
            $table->Text("supplier_address2")->nullable();
            $table->String("supplier_state")->nullable();
            $table->String("supplier_city")->nullable();
            $table->String("supplier_zip")->nullable();
            $table->String("supplier_country")->nullable();
            $table->Text("supplier_info")->nullable();
            $table->String("requestor_fname")->nullable();
            $table->String("requestor_lname")->nullable();
            $table->String("requestor_organization")->nullable();
            $table->String("requestor_email")->nullable();
            $table->String("requestor_phone")->nullable();
            $table->Text ("requestor_info")->nullable();
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
        Schema::dropIfExists('supplier_requests');
    }
}
