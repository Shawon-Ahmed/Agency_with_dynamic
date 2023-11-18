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
        Schema::create('content_models', function (Blueprint $table) {
            $table->id();
            $table->text('content1')->Nullable;
            $table->text('content2')->Nullable;
            $table->text('content3')->Nullable;
            $table->text('placeName')->Nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_models');
    }
};
