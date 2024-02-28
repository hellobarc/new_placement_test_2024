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
            $table->string('occupation');
            $table->string('address');
            $table->string('location');
            $table->string('organization');
            $table->string('date_of_birth');
            $table->string('education');
            $table->string('how_you_know');
            $table->string('expected_country');
            $table->integer('expected_score');
            $table->string('purpose_of_ielts');
            $table->string('branch_recomendation')->nullable();
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
