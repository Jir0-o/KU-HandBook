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
        Schema::create('mapping_degree_term_durations', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->integer('value');
            $table->integer('version');
            $table->unsignedBigInteger('degree_program_id');
            $table->unsignedBigInteger('term_duration_id');
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();

            $table->foreign('degree_program_id')->references('id')->on('degree_programs');
            $table->foreign('term_duration_id')->references('id')->on('curriculum_term_durations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapping_degree_term_durations');
    }
};
