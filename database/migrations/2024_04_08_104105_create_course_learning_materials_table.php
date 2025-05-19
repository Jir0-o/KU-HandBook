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
        Schema::create('course_learning_materials', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->integer('version');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('learning_material_type_id');
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('course_infos');
            $table->foreign('learning_material_type_id')->references('id')->on('learning_material_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_learning_materials');
    }
};
