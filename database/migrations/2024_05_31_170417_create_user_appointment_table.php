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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('firstname');
            $table->string('lname');
            $table->date('date');
            $table->string('time');
            $table->string('specialist');
            $table->string('status')->default('pending');
            $table->text('symptoms')->nullable();
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

        Schema::table('user_appointment', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
