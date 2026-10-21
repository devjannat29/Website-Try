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
        if (!Schema::hasTable('categories')) {
            Schema::create('categories', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('image')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('courses')) {
            Schema::create('courses', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('category')->nullable();
                $table->string('duration')->nullable();
                $table->string('Fee')->nullable();
                $table->string('bteb_level')->nullable();
                $table->string('image')->nullable();
                $table->text('description')->nullable();
                $table->longText('syllabus')->nullable();
                $table->string('careers')->nullable();
                $table->string('link')->nullable();
                $table->string('status')->default('active');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('services')) {
            Schema::create('services', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description')->nullable();
                $table->string('icon')->nullable();
                $table->string('status')->default('active');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('members')) {
            Schema::create('members', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('designation')->nullable();
                $table->string('education')->nullable();
                $table->string('department')->nullable();
                $table->string('experience')->nullable();
                $table->string('image')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('notices')) {
            Schema::create('notices', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('category')->nullable();
                $table->string('date')->nullable();
                $table->string('file')->nullable();
                $table->text('summary')->nullable();
                $table->string('badge')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('events')) {
            Schema::create('events', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('date')->nullable();
                $table->string('time')->nullable();
                $table->string('venue')->nullable();
                $table->text('description')->nullable();
                $table->string('image')->nullable();
                $table->string('status')->default('upcoming');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('job__categories')) {
            Schema::create('job__categories', function (Blueprint $table) {
                $table->id();
                $table->string('category_title');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('job__circulars')) {
            Schema::create('job__circulars', function (Blueprint $table) {
                $table->id();
                $table->string('category')->nullable();
                $table->string('job_title');
                $table->string('company')->nullable();
                $table->string('country')->nullable();
                $table->integer('vacancies')->default(1);
                $table->string('salary')->nullable();
                $table->string('deadline')->nullable();
                $table->text('requirements')->nullable();
                $table->string('file')->nullable();
                $table->string('status')->default('active');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('interviews')) {
            Schema::create('interviews', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('trades')->nullable();
                $table->string('date')->nullable();
                $table->string('venue')->nullable();
                $table->string('delegates')->nullable();
                $table->string('file')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('galleries')) {
            Schema::create('galleries', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->string('category')->default('general'); // general, placement, overseas
                $table->string('image');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('testimonials')) {
            Schema::create('testimonials', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('trade')->nullable();
                $table->string('country')->nullable();
                $table->string('salary')->nullable();
                $table->string('batch')->nullable();
                $table->text('quote')->nullable();
                $table->string('image')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('abouts')) {
            Schema::create('abouts', function (Blueprint $table) {
                $table->id();
                $table->longText('about_desc')->nullable();
                $table->longText('mission')->nullable();
                $table->longText('vission')->nullable();
                $table->longText('job_placement')->nullable();
                $table->string('image')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('settings')) {
            Schema::create('settings', function (Blueprint $table) {
                $table->id();
                $table->string('site_name')->default('ATTC Technical Training Center');
                $table->text('address')->nullable();
                $table->string('phone')->nullable();
                $table->string('gmail')->nullable();
                $table->string('hotline')->nullable();
                $table->string('hours')->nullable();
                $table->string('bteb_code')->nullable();
                $table->string('bmet_license')->nullable();
                $table->string('logo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('admission_applications')) {
            Schema::create('admission_applications', function (Blueprint $table) {
                $table->id();
                $table->string('course_name')->nullable();
                $table->string('applicant_name');
                $table->string('phone');
                $table->string('nid')->nullable();
                $table->string('shift')->nullable();
                $table->string('hostel')->nullable();
                $table->text('address')->nullable();
                $table->string('status')->default('pending');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('student_certificates')) {
            Schema::create('student_certificates', function (Blueprint $table) {
                $table->id();
                $table->string('reg_number')->unique();
                $table->string('student_name');
                $table->string('father_name')->nullable();
                $table->string('course')->nullable();
                $table->string('bteb_level')->nullable();
                $table->string('grade')->nullable();
                $table->string('session')->nullable();
                $table->string('issue_date')->nullable();
                $table->string('status')->default('verified');
                $table->string('placement_status')->nullable();
                $table->string('certificate_id')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_certificates');
        Schema::dropIfExists('admission_applications');
        Schema::dropIfExists('settings');
        Schema::dropIfExists('abouts');
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('galleries');
        Schema::dropIfExists('interviews');
        Schema::dropIfExists('job__circulars');
        Schema::dropIfExists('job__categories');
        Schema::dropIfExists('events');
        Schema::dropIfExists('notices');
        Schema::dropIfExists('members');
        Schema::dropIfExists('services');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('categories');
    }
};
