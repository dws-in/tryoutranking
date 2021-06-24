<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTryoutsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tryouts', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->char('name', 50);
      $table->text('description');
      $table->dateTime('held');
      $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
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
    Schema::dropIfExists('tryouts');
  }
}
