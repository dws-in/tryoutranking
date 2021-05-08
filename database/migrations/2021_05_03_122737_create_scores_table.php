<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('scores', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('tryout_id')->unsigned()->index();
      $table->integer('user_id')->unsigned()->index();
      $table->float('indonesia');
      $table->float('english');
      $table->float('mathematic');
      $table->float('physic');
      $table->float('biology');
      $table->float('chemistry');
      $table->float('geography');
      $table->float('economic');
      $table->float('history');
      $table->float('sosiology');
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
    Schema::dropIfExists('scores');
  }
}
