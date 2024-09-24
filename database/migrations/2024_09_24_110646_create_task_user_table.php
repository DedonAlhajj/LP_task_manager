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
        Schema::create('task_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // المفتاح الأجنبي للمستخدم
            $table->foreignId('task_id')->constrained('tasks')->onDelete('cascade'); // المفتاح الأجنبي للمهمة
            $table->timestamps(); // تواريخ الإنشاء والتحديث

            $table->index('user_id');
            $table->index('task_id');

            $table->unique(['user_id', 'task_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_user');
    }
};
