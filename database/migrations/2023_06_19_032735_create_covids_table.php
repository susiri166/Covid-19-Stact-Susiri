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
        Schema::create('covids', function (Blueprint $table) {
            $table->id();
             $table->string('local_new_cases');
            $table->string('local_total_cases');
            $table->string('local_new_deaths');
            $table->string('local_active_cases');
            $table->string('global_new_cases');
            $table->string('global_total_cases');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('covids');
    }
};
