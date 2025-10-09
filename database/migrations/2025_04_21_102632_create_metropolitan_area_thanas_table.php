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
        Schema::create('metropolitan_area_thanas', function (Blueprint $table) {
            $table->id();
            $table->integer('upazilla_id');
            $table->string('name');
            $table->string('bn_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metropolitan_area_thanas');
    }
};
