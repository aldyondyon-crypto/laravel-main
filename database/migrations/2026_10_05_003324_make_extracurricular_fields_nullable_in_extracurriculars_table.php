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
        Schema::table('extracurriculars', function (Blueprint $table) {
            $table->text('description')->nullable()->change();
            $table->string('instructor')->nullable()->change();
            $table->string('schedule')->nullable()->change();
            $table->string('location')->nullable()->change();
        });

        Schema::table('staffs', function (Blueprint $table) {
            $table->string('position')->nullable()->change();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('staffs', function (Blueprint $table) {
            $table->dropColumn('email');
        });
    }
};
