<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterTryoutsTable extends Migration
{
    public function up()
    {
        Schema::create('register_tryout', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('tryout_id')->references('id')->on('tryouts')->cascadeOnDelete();
            $table->string("user_name");
            $table->string("school_name");
            $table->date("graduation_date");
            $table->string("phone_number");
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('register_tryouts');
    }
}
