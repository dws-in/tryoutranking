<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateScoresTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('scores', function (Blueprint $table) {
      $table->renameColumn('economic', 'economy');
      $table->renameColumn('sosiology', 'sociology');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('scores', function (Blueprint $table) {
      //
    });
  }
}
