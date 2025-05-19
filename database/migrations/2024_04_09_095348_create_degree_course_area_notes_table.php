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
        Schema::create('degree_course_area_notes', function (Blueprint $table) {
            $table->id();
            $table->text('note');
            $table->integer('version');
            $table->unsignedBigInteger('degree_program_id');
            $table->unsignedBigInteger('course_area_id');
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();
            
            
            $table->foreign('degree_program_id')->references('id')->on('degree_programs');
            $table->foreign('course_area_id')->references('id')->on('course_areas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('degree_course_area_notes');
    }
};
