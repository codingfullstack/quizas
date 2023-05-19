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
            $table->id();
            $table->unsignedBigInteger('quiz_id');
            $table->longText('question');
            $table->integer('question_id');
            $table->string('A');
            $table->string('B');
            $table->string('C')->nullable();
            $table->string('D')->nullable();
            $table->string('answer');
            $table->timestamps();

            $table->foreign('quiz_id')->references('id')->on('quizzes')->constrained()->onDelete('cascade');
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
