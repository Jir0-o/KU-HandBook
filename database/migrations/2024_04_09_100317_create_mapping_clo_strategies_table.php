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
        Schema::create('mapping_clo_strategies', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->integer('version');
            $table->unsignedBigInteger('clo_id');
            $table->unsignedBigInteger('strategy_id');
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();

            $table->foreign('clo_id')->references('id')->on('course_clos');
            $table->foreign('strategy_id')->references('id')->on('course_strategies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapping_clo_strategies');
    }
};
