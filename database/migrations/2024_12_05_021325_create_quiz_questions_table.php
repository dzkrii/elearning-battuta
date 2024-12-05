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
        Schema::create('quiz_questions', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade'); // Foreign Key ke quizzes
            $table->text('question'); // Pertanyaan
            $table->text('answer')->nullable(); // Jawaban (opsional, karena peserta mungkin mengisi ini nantinya)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_questions');
    }
};
