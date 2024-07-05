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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();

            $table->string('first_name')->comment('Имя');
            $table->string('middle_name')->comment('Отчество');
            $table->string('last_name')->comment('Фамилия');
            $table->string('job_title')->comment('Должность');
            
            $table->bigInteger('employee_category_id')->unsigned()->comment('ID категории сотрудника');
            $table->foreign('employee_category_id')->references('id')->on('employee_categories');

            $table->string('login')->unique();

            $table->string('password');
            $table->boolean('is_registration_confirmed')->default(false)->comment('Подтверждена ли регистрация?');
            $table->rememberToken();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
