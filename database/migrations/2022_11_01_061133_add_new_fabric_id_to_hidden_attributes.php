<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFabricIdToHiddenAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hidden_attributes', function (Blueprint $table) {
            $table->unsignedBigInteger('new_fabric_id')->nullable();
            $table->foreign('new_fabric_id')->references('id')->on('new_fabrics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hidden_attributes', function (Blueprint $table) {
            $table->dropColumn('new_fabric_id');
        });
    }
}
