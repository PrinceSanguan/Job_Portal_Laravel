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
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('address', 255);
            $table->string('published', 50);
            $table->string('salary', 50);
            $table->string('vacancy', 50);
            $table->string('status', 100);
            $table->string('description', 255);
            $table->string('responsibilites', 255);
            $table->string('qualification', 255);
            $table->string('detail', 255);
            $table->string('image', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_details');
    }
};
