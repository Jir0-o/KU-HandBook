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
        Schema::create('curriculum_structures', function (Blueprint $table) {
            $table->id();
            $table->text('admission_requirement');
            $table->integer('year');
            $table->integer('term');
            $table->float('total_min_credit_required');
            $table->float('available_credit');
            $table->float('min_cgpa_to_graduate');
            $table->integer('total_class_per_term');
            $table->integer('max_academic_years_to_complete');
            $table->integer('version');
            $table->unsignedBigInteger('degree_program_id');
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();

            $table->foreign('degree_program_id')->references('id')->on('degree_programs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculum_structures');
    }
};
