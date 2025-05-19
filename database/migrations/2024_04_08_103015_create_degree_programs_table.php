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
        Schema::create('degree_programs', function (Blueprint $table) {
            $table->id();
            $table->string('degree');
            $table->string('degree_code');
            $table->text('program_description')->nullable();
            $table->text('major')->nullable();
            $table->integer('version');
            $table->unsignedBigInteger('discipline_id');
            $table->unsignedBigInteger('university_id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('bnqf_level_id');
            $table->unsignedBigInteger('isced_id');
            $table->unsignedBigInteger('study_mode_id');
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('applicable_session_id');
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('is_completed')->default(0);
            $table->timestamps();

            $table->foreign('discipline_id')->references('id')->on('disciplines');
            $table->foreign('university_id')->references('id')->on('universities');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('bnqf_level_id')->references('id')->on('bnqf_levels');
            $table->foreign('isced_id')->references('id')->on('isced_codes');
            $table->foreign('study_mode_id')->references('id')->on('study_modes');
            $table->foreign('language_id')->references('id')->on('language_of_studies');
            $table->foreign('applicable_session_id')->references('id')->on('applicable_sessions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('degree_programs');
    }
};
