<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateScoresTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('scores', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('tryout_id');
            $table->foreignID('register_id')->references('id')->on('register_tryouts')->cascadeOnDelete();
    });
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
