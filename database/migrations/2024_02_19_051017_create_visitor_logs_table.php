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
        Schema::create('visitor_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('assign_advisor');
            $table->string('full_name');
            $table->string('email');
            $table->string('mobile');
            $table->string('purpose_of_visit');
            $table->enum('status',['approved','unapproved','declined']);
            $table->enum('adviser_notification',['seen','not_seen']);
            $table->enum('front_desk_notification',['seen','not_seen']);
            $table->string('time_log')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_logs');
    }
};
