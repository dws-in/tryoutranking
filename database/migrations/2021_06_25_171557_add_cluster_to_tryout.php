<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClusterToTryout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tryouts', function (Blueprint $table) {
            //
            $table->foreignID('cluster_id')->references('id')->on('clusters')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tryouts', function (Blueprint $table) {
            //
            $table->dropColumn('cluster_id');
        });
    }
}
