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
        Schema::create('standings', function (Blueprint $table) {
            $table->id();
            $table->string('1st', 20);
            $table->string('2nd', 20);
            $table->string('3rd', 20);
            $table->string('4th', 20);
            $table->string('5th', 20);
            $table->string('6th', 20);
            $table->string('7th', 20);
            $table->string('8th', 20);
            $table->string('9th', 20);
            $table->string('10th', 20);
            $table->string('11th', 20);
            $table->string('12th', 20);
            $table->string('13th', 20);
            $table->string('14th', 20);
            $table->string('15th', 20);
            $table->string('16th', 20);
            $table->string('17th', 20);
            $table->string('18th', 20);
            $table->string('19th', 20);
            $table->string('20th', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('standings');
    }
};
