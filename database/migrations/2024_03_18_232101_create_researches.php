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
        Schema::create('researches', function (Blueprint $table) {
            $table->id();
            $table->string('field');
            $table->string('title');
            $table->string('authors');
            $table->string('introduction');
            $table->string('justification');
            $table->string('objective');
            $table->string('method');
            $table->string('Schedule');
            $table->boolean('active');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('researches');
    }
};
