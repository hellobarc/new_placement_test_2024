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
        Schema::create('visitor_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('visitor_log_id');
            $table->string('occupation')->nullable();
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->string('organization')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('education')->nullable();
            $table->string('how_you_know')->nullable();
            $table->string('expected_country')->nullable();
            $table->integer('expected_score')->nullable();
            $table->string('refer_stu_name')->nullable();
            $table->string('refer_phone_number')->nullable();
            $table->string('refer_batch_name')->nullable();
            $table->string('purpose_of_ielts')->nullable();
            $table->string('ielts_test_center')->nullable();
            $table->string('ielts_exam_type')->nullable();
            $table->string('category_of_ielts')->nullable();
            $table->string('ielts_can_id')->nullable();
            $table->string('ielts_exam_date')->nullable();
            $table->string('comments_from_student')->nullable();
            $table->string('feedback_from_advisor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_infos');
    }
};
