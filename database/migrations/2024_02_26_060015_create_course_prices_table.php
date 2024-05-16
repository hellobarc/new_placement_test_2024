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
        Schema::create('course_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('bundle_id');
            $table->enum('course_level',['a1','a2','b1','b2','c1','c2']);
            $table->enum('package',['standard','regular','privileged']);
            $table->string('duration')->nullable();
            $table->string('individual_price')->nullable();
            $table->string('discount')->nullable();
            $table->string('offered_price')->nullable();
            $table->string('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_prices');
    }
};
