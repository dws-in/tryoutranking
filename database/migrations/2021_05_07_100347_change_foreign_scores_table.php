<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeForeignScoresTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('scores', function (Blueprint $table) {
      $table->bigInteger('user_id')->unsigned()->change();
      $table->float('indonesia')->nullable()->change();
      $table->float('english')->nullable()->change();
      $table->float('mathematic')->nullable()->change();
      $table->float('physic')->nullable()->change();
      $table->float('biology')->nullable()->change();
      $table->float('chemistry')->nullable()->change();
      $table->float('geography')->nullable()->change();
      $table->float('economy')->nullable()->change();
      $table->float('history')->nullable()->change();
      $table->float('sociology')->nullable()->change();
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
