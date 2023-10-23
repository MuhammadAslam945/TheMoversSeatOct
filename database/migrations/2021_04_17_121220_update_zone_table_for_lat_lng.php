<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateZoneTableForLatLng extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('zones')) {
            if (!Schema::hasColumn('zones', 'latitude')) {
                Schema::table('zones', function (Blueprint $table) {
                    $table->double('latitude', 15, 8)->default(11.015956);
                });
            }

            if (!Schema::hasColumn('zones', 'longitude')) {
                Schema::table('zones', function (Blueprint $table) {
                    $table->double('longitude', 15, 8)->default(76.968985);
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
