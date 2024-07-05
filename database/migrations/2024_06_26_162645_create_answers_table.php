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
        Schema::create('answers', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();           

            $table->bigInteger('candidate_id')->unsigned()->comment('ID кандидата');
            $table->foreign('candidate_id')->references('id')->on('candidates');            

            $table->bigInteger('question_id')->unsigned()->comment('ID вопроса');
            $table->foreign('question_id')->references('id')->on('questions');

            $table->string('content')->comment('содержание');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
