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
        Schema::table('courses', function (Blueprint $table) {
            if (!Schema::hasColumn('courses', 'course_type')) {
                $table->string('course_type')->default('short_course')->after('bteb_level'); // 'short_course', 'rpl'
            }
            if (!Schema::hasColumn('courses', 'pricing_type')) {
                $table->string('pricing_type')->default('paid')->after('course_type'); // 'paid', 'free'
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            if (Schema::hasColumn('courses', 'course_type')) {
                $table->dropColumn('course_type');
            }
            if (Schema::hasColumn('courses', 'pricing_type')) {
                $table->dropColumn('pricing_type');
            }
        });
    }
};
