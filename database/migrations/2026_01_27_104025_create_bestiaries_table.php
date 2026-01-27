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
        Schema::create('bestiaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('species');
            $table->unsignedTinyInteger('danger_level');
            $table->string('habitat');
            $table->json('traits');
            $table->boolean('is_hostile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bestiaries');
    }
};
