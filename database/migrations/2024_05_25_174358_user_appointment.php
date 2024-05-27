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
        Schema::create('user_appointment', function (Blueprint $table) {
            $table->id();
            $table->string('time')->unique();
            $table->timestamp('date')->nullable();
            $table->string('type_of_appointment');
            $table->string('message');
            $table->unsignedBigInteger('doctor_id'); // Added foreign key for doctor
            $table->unsignedBigInteger('admin_id'); // Added foreign key for admin
            $table->foreign('doctor_id')->references('id')->on('doctors'); // Foreign key constraint for doctor
            $table->foreign('admin_id')->references('id')->on('admins'); // Foreign key constraint for admin
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
        Schema::dropIfExists('user_appointment');
    }
};