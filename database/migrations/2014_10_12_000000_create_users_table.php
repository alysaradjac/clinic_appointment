<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('role_id')->nullable();
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
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
