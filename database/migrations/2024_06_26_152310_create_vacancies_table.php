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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();

            $table->string('job_title')->comment('должность');
            $table->string('grade')->comment('грейд');
            $table->string('max_salary')->comment('максимальная зарплата');
            $table->string('requirements_for_candidate')->comment('требования к кандидату');
            $table->string('project_information')->comment('информация о проекте');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
