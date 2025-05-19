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
        Schema::create('mapping_clo_plos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clo_id');
            $table->string('plo_ids');
            $table->integer('version');
            $table->timestamps();

            $table->foreign('clo_id')->references('id')->on('course_clos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapping_clo_plos');
    }
};
