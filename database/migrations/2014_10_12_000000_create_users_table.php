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
            $table->json('immunization')->default(json_encode([
                'bcg' => false,
                'opv' => false,
                'dpt' => false,
                'hepb' => false,
                'measles' => false,
            ]));
            $table->json('vaccine')->default(json_encode([
                'first_dose' => false,
                'second_dose' => false,
                'booster1' => false,
                'booster2' => false,
                'others' => null,
            ]));
            $table->json('allergies')->default(json_encode([
                'food' => false,
                'drug' => false,
                'insect' => false,
                'pollen' => false,
                'seasonal' => false,
                'environment' => false,
                'allergies_others' => false,
            ]));
            $table->json('medical_history')->default(json_encode([
                'asthma' => false,
                'hyper' => false,
                'diabetes' => false,
                'heart' => false,
                'kidney' => false,
                'cancer' => false,
                'tuberculosis' => false,
                'medical_others' => false,
            ]));
            $table->json('paternal')->default(json_encode([
                'paternal1' => false,
                'paternal2' => false,
                'paternal3' => false,
                'paternal4' => false,
                'paternal5' => false,
                'paternal6' => false,
                'paternal7' => false,
                'paternal8' => false,
                ]));
            $table->json('maternal')->default(json_encode([
                'maternal1' => false,
                'maternal2' => false,
                'maternal3' => false,
                'maternal4' => false,
                'maternal5' => false,
                'maternal6' => false,
                'maternal7' => false,
                'maternal8' => false,
                ]));
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