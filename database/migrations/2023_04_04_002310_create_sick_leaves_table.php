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
        Schema::create('sick_leaves', function (Blueprint $table) {
            $table->id();
            $table->string('leave_id', 50)->unique();
            $table->date('leave_start');
            $table->date('leave_end');
            $table->tinyInteger('leave_duration');
            $table->date('issue_date');
            $table->string('name_en', 150);
            $table->string('name_ar', 150);
            $table->integer('national_id');
            $table->string('nationality_en', 50);
            $table->string('nationality_ar', 50);
            $table->string('employer', 100);
            $table->string('physician_name_en', 150);
            $table->string('physician_name_ar', 150);
            $table->string('position_en', 50);
            $table->string('position_ar', 50);
            $table->string('medical_complex_en', 100);
            $table->string('medical_complex_ar', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sick_leaves');
    }
};
