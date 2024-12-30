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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('keyword')->unique();
            $table->text('description')->nullable();
            $table->longText('item');
            $table->string('short_code');
            $table->longText('setting');
            $table->softDeletes(); // Adds a nullable 'deleted_at' column
            $table->timestamps();  // Adds 'created_at' and 'updated_at' columns
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
