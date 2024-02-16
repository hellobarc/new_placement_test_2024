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
        Schema::create('test_fill_blanks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('test_question_id');
            $table->longText('text')->default(NULL);
            $table->enum('is_show', ['yes', 'no'])->default('no');
            $table->mediumText('blank_answer')->default(NULL);
            $table->integer('marks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_fill_blanks');
    }
};
