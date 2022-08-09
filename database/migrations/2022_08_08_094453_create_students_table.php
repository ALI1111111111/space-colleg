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
            $table->string('f_name');
            $table->string('father');
            $table->integer('cnic')->nullable();
            $table->string('class_time')->nullable();
            $table->date('birth')->nullable();
            $table->date('Adm_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('more_info')->nullable();
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
