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
    {Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('uid');
        $table->string('name')->nullable();
        $table->string('fname')->nullable();
        $table->string('phone');
        $table->string('email')->nullable();
        $table->string('fee');
        $table->string('pmode')->nullable();
        $table->string('dfee')->nullable();
        $table->string('duration')->nullable();
        $table->string('intime')->nullable();
        $table->string('outtime')->nullable();
        $table->string('adhaar')->unique();
        $table->string('adharimage')->nullable();
        $table->string('image')->nullable();
        $table->string('address')->nullable();
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
        Schema::dropIfExists('students');
    }
};
