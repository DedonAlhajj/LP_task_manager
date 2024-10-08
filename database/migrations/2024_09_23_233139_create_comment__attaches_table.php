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
        Schema::create('comment__attaches', function (Blueprint $table) {
            $table->id();
            $table->text('body')->nullable();
            $table->string('file_path')->nullable();
            $table->enum('message_type', ['text', 'image','video','audio','file'])->default('text');
            $table->foreignId('user_id');
            $table->integer('comm_attach_able_id');
            $table->string('comm_attach_able_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment__attaches');
    }
};
