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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
			$table->string('uid');
            $table->string('name');
			$table->string('fname');
			$table->string('contact');
			$table->string('fee');
			$table->string('dfee');
			$table->string('duration');
			$table->string('stiming');
			$table->string('etiming');
			$table->string('adhaar')->unique();
            $table->string('email')->unique();
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
        Schema::dropIfExists('student');
    }
};
