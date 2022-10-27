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
        Schema::create('notebooks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('secondname');
            $table->string('lastname');
            $table->string('Company')->nullable();;
            $table->bigInteger('Phone');
            $table->string('Email')->unique();
            $table->date('Birthdate')->nullable();
            $table->string('Image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notebooks');
    }
};
