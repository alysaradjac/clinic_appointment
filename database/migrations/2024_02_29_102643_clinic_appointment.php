<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_appointment', function (Blueprint $table) {
            $table->id();
            $table->string('time')->unique();
            $table->timestamp('date')->nullable();
            $table->string('type_of_appointment');
            $table->string('message');
            $table->unsignedBigInteger('schedule_id');
            $table->foreign('schedule_id')->reference('id')->on('schedule');
            $table->rememberToken();
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
        //
    }
};
