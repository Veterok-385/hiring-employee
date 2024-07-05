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
        Schema::create('comments', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();           

            $table->bigInteger('answer_id')->unsigned()->comment('ID ответа');
            $table->foreign('answer_id')->references('id')->on('answers');
            
            $table->bigInteger('user_id')->unsigned()->comment('ID сотрудника');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('content')->comment('содержание');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
