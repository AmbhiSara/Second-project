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
        Schema::create('h_colors', function (Blueprint $table) {
            $table->id();
            $table->string('hcolor_name')->unique();
            $table->string('hcolor');
            $table->string('hcolor_order');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_colors');
    }
};
