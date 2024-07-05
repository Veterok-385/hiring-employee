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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();

            $table->string('first_name')->comment('Имя');
            $table->string('middle_name')->comment('Отчество');
            $table->string('last_name')->comment('Фамилия');

            $table->string('job_title')->nullable()->comment('Должность');
            $table->string('company')->nullable()->comment('Компания');
            $table->string('salary')->nullable()->comment('зарплата');
            $table->string('city')->nullable()->comment('город');

            $table->timestamp('date_of_birth')->nullable()->comment('дата рождения');

            $table->string('telephone')->comment('Телефон');
            $table->string('email')->comment('электронная почта');

            $table->string('additional_information')->nullable()->comment('дополнительная информация');
            $table->string('status')->default('собеседование')->comment('собеседование, оффер, отказ');
            $table->integer('stage')->default(0)->comment('номер пройденного этапа');

            $table->bigInteger('vacancy_id')->unsigned()->comment('ID вакансии');
            $table->foreign('vacancy_id')->references('id')->on('vacancies');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
