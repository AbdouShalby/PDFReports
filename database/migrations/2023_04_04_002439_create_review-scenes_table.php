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
        Schema::create('review_scenes', function (Blueprint $table) {
            $table->id();
            $table->string('leave_id', 50)->unique();
            $table->dateTime('admission');
            $table->dateTime('discharge');
            $table->time('waiting_period');
            $table->date('issue_date');
            $table->string('name', 150);
            $table->integer('national_id');
            $table->string('nationality', 50);
            $table->string('employer', 100);
            $table->string('physician_name', 150);
            $table->string('position', 50);
            $table->string('visit_type', 50);
            $table->string('medical_complex', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_scenes');
    }
};
