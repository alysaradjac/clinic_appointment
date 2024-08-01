<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->date('bdate')->nullable();
            $table->string('contact')->nullable();
            $table->string('caddress')->nullable();
            $table->string('haddress')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('sname')->nullable();
            $table->string('guardian')->nullable();
            $table->string('emergency')->nullable();
            $table->string('history')->nullable();
            $table->string('health_problems')->nullable();
            $table->string('surgery')->nullable();
            $table->text('others')->nullable();
            $table->string('contactF')->nullable();
            $table->string('contactM')->nullable();
            $table->string('contactS')->nullable();
            $table->string('contactG')->nullable();
            $table->string('contactP')->nullable();
            $table->string('school_id')->nullable();
            $table->string('dept')->nullable();
            $table->string('course')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('religion')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            
            $table->json('immunization')->nullable()->default(json_encode([]));
            $table->json('vaccine')->nullable()->default(json_encode([]));
            $table->json('allergies')->nullable()->default(json_encode([]));
            $table->json('medical_history')->nullable()->default(json_encode([]));
            $table->json('paternal')->nullable()->default(json_encode([]));
            $table->json('maternal')->nullable()->default(json_encode([]));
            $table->boolean('is_admin')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
