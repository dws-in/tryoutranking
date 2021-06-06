<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterTryoutsTable extends Migration
{
    public function up()
    {
        Schema::create('register_tryouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->index()->default(3);
            $table->bigInteger('tryout_id')->unsigned()->index()->default(1);
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
