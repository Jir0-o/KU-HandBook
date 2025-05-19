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
        Schema::create('mapping_peo_ums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peo_id');
            $table->unsignedBigInteger('um_id');
            $table->timestamps();

            $table->foreign('peo_id')->references('id')->on('peo_details');
            $table->foreign('um_id')->references('id')->on('university_missions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapping_peo_ums');
    }
};
