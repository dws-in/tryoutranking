<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportsTable extends Migration
{
  public function up()
  {
    Schema::create('supports', function (Blueprint $table) {
      $table->increments('id');
      $table->char('email', 50);
      $table->text('description');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('supports');
  }
}
