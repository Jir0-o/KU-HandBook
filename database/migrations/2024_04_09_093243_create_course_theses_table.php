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
        Schema::create('course_theses', function (Blueprint $table) {
            $table->id();
            $table->text('linked_resource')->nullable();
            $table->integer('version');
            $table->unsignedBigInteger('course_id');
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('course_infos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_theses');
    }
};
