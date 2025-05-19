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
        Schema::create('graduate_attributes', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->text('description')->nullable();
            $table->string('domain_ids');
            $table->integer('version');
            $table->unsignedBigInteger('degree_program_id');
            $table->unsignedBigInteger('graduate_attribute_title_id');
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();

            $table->foreign('degree_program_id')->references('id')->on('degree_programs');
            $table->foreign('graduate_attribute_title_id')->references('id')->on('graduate_attribute_titles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graduate_attributes');
    }
};
