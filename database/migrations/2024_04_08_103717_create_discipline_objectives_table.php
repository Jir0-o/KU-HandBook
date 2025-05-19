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
        Schema::create('discipline_objectives', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->text('description')->nullable();
            $table->integer('version');
            $table->unsignedBigInteger('discipline_id');
            $table->unsignedBigInteger('discipline_objective_title_id');
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();

            $table->foreign('discipline_id')->references('id')->on('disciplines');
            $table->foreign('discipline_objective_title_id')->references('id')->on('discipline_objective_titles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discipline_objectives');
    }
};
