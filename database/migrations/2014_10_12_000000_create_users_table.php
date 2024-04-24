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
            $table->boolean('bcg')->default(false);
            $table->boolean('opv')->default(false);
            $table->boolean('dpt')->default(false);
            $table->boolean('hepb')->default(false);
            $table->boolean('measles')->default(false);
            $table->boolean('first_dose')->default(false);
            $table->boolean('second_dose')->default(false);
            $table->boolean('booster1')->default(false);
            $table->boolean('booster2')->default(false);
            $table->text('others')->nullable();
            $table->string('contactF');
            $table->string('contactM');
            $table->string('contactS')->nullable();
            $table->string('contactG')->nullable();
            $table->string('contactP');
            $table->boolean('food')->default(false);
            $table->boolean('drug')->default(false);
            $table->boolean('insect')->default(false);
            $table->boolean('pollen')->default(false);
            $table->boolean('seasonal')->default(false);
            $table->boolean('environment')->default(false);
            $table->boolean('allergies_others')->default(false);
            $table->boolean('asthma')->default(false);
            $table->boolean('hyper')->default(false);
            $table->boolean('diabetes')->default(false);
            $table->boolean('heart')->default(false);
            $table->boolean('kidney')->default(false);
            $table->boolean('cancer')->default(false);
            $table->boolean('tuberculosis')->default(false);
            $table->boolean('family_others')->default(false);
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
