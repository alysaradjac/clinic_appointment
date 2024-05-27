<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('mobile');
            $table->integer('email'); // Consider changing this to string if email addresses are stored
            $table->string('password');
            $table->json('specialist')->nullable()->default(json_encode([]));
            $table->unsignedBigInteger('role_id')->default(1); // Assign a default role ID or manage programmatically
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doctor');
    }
};