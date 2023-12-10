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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('description_one');
            $table->string('description_two');
            $table->string('description_three');
            $table->string('age');
            $table->string('birth');
            $table->string('experience_year');
            $table->string('experience');
            $table->string('project_num');
            $table->string('project');
            $table->string('client_num');
            $table->string('client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
