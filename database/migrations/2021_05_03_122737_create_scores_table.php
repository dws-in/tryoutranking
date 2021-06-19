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
      $table->bigInteger('user_id')->unsigned()->index();
      $table->float('indonesia')->nullable();
      $table->float('english')->nullable();
      $table->float('mathematic')->nullable();
      $table->float('physic')->nullable();
      $table->float('biology')->nullable();
      $table->float('chemistry')->nullable();
      $table->float('geography')->nullable();
      $table->float('economy')->nullable();
      $table->float('history')->nullable();
      $table->float('sociology')->nullable();
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
