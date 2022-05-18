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
            
            $table->string('STUDENT_LRN', 12);
            $table->string('FIRST_NAME', 30);
            $table->string('MIDDLE_NAME', 30);
            $table->string('LAST_NAME', 30);
            $table->integer('AGE');
            $table->string('YEAR_LEVEL', 15);
            $table->string('SECTION', 30);

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
