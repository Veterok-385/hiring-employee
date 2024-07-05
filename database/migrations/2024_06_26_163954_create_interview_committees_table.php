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
        Schema::create('interview_committees', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();

            $table->bigInteger('vacancy_id')->unsigned()->comment('ID вакансии');
            $table->foreign('vacancy_id')->references('id')->on('vacancies');

            $table->bigInteger('user_id')->unsigned()->comment('ID сотрудника');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interview_committees');
    }
};
