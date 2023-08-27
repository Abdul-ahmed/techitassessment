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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('jamb_number');
            $table->string('jamb_year');
            $table->string('surname');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->string('sponsor_name');
            $table->string('sponsor_email');
            $table->string('sponsor_relationship');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('examination_year');
            $table->string('examination_number');
            $table->unsignedMediumInteger('course_of_study_id');
            $table->unsignedSmallInteger('gender_id');
            $table->unsignedMediumInteger('nationality_id');
            $table->unsignedMediumInteger('state_id');
            $table->string('date_of_birth');
            $table->unsignedSmallInteger('examination_type_id');
            $table->longText('exam_titles_and_scores');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
