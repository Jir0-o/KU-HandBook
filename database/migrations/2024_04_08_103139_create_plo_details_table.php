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
        Schema::create('plo_details', function (Blueprint $table) {
            $table->id();
            $table->string('skill_type')->nullable();
            $table->string('code');
            $table->text('description')->nullable();
            $table->integer('version');
            $table->unsignedBigInteger('degree_program_id');
            $table->unsignedBigInteger('plo_title_id');
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();

            $table->foreign('degree_program_id')->references('id')->on('degree_programs');
            $table->foreign('plo_title_id')->references('id')->on('plo_titles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plo_details');
    }
};
