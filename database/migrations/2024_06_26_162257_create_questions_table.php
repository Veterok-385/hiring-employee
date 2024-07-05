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
        Schema::create('questions', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();

            $table->string('content')->comment('содержание');

            $table->integer('question_number')->comment('номер вопроса');           

            $table->bigInteger('interview_stage_id')->unsigned()->comment('ID этапа собеседования');
            $table->foreign('interview_stage_id')->references('id')->on('interview_stages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
