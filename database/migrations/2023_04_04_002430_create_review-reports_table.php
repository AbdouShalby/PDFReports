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
        Schema::create('review_reports', function (Blueprint $table) {
            $table->id();
            $table->string('leave_id', 50)->unique();
            $table->integer('national_id');
            $table->string('national_type');
            $table->string('name_en', 150);
            $table->string('name_ar', 150);
            $table->date('print_date');
            $table->string('nationality', 50);
            $table->date('birth_date');
            $table->string('work', 50);
            $table->date('admission');
            $table->date('discharge');
            $table->date('review_date');
            $table->longText('details');
            $table->string('physician_name');
            $table->string('physician_position');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_reports');
    }
};
