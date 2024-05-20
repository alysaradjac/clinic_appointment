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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('email');
            $table->date('bdate');
            $table->string('contact');
            $table->string('caddress');
            $table->string('haddress');
            $table->string('fname');
            $table->string('mname');
            $table->string('sname')->nullable();
            $table->string('guardian')->nullable();
            $table->string('emergency');
            $table->string('history');
            $table->string('health_problems');
            $table->string('surgery');
            $table->text('others')->nullable();
            $table->string('contactF');
            $table->string('contactM');
            $table->string('contactS')->nullable();
            $table->string('contactG')->nullable();
            $table->string('contactP');
            $table->string('school_id');
            $table->string('dept');
            $table->string('course');
            $table->string('age');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('religion');
            $table->string('height');
            $table->string('weight');
            
            $table->json('immunization', 'array')->nullable()->default(json_encode([]));
            $table->json('vaccine', 'array')->nullable()->default(json_encode([]));
            $table->json('allergies', 'array')->nullable()->default(json_encode([]));
            $table->json('medical_history', 'array')->nullable()->default(json_encode([]));
            $table->json('paternal', 'array')->nullable()->default(json_encode([]));
            $table->json('maternal', 'array')->nullable()->default(json_encode([]));
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
        Schema::dropIfExists('users');
    }
};