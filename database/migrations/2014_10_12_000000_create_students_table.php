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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
			$table->string('uid');
            $table->string('name');
			$table->string('fname');
			$table->string('phone');
			$table->string('email');
			$table->string('fee');
			$table->string('pmode');
			$table->string('dfee');
			$table->string('duration');
			$table->string('intime');
			$table->string('outtime');
			$table->string('adhaar')->unique();
			$table->string('adharimage');
			$table->string('image');
            $table->string('address');
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
