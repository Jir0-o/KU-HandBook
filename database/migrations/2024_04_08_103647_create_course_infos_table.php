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
        Schema::create('course_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->text('description')->nullable();
            $table->string('status');
            $table->integer('credit');
            $table->double('total_hours');
            $table->text('pre_requisite')->nullable();
            $table->integer('version');
            $table->unsignedBigInteger('degree_program_id');
            $table->unsignedBigInteger('year_id');
            $table->unsignedBigInteger('term_id');
            $table->unsignedBigInteger('course_area_id');
            $table->unsignedBigInteger('course_type_id');
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();

            $table->foreign('degree_program_id')->references('id')->on('degree_programs');
            $table->foreign('year_id')->references('id')->on('course_years');
            $table->foreign('term_id')->references('id')->on('course_terms');
            $table->foreign('course_area_id')->references('id')->on('course_areas');
            $table->foreign('course_type_id')->references('id')->on('course_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_infos');
    }
};
