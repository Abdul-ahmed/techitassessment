<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'jamb_number',
        'jamb_year',
        'surname',
        'first_name',
        'middle_name',
        'email',
        'phone_number',
        'address',
        'sponsor_name',
        'sponsor_email',
        'sponsor_relationship',
        'religion',
        'marital_status',
        'examination_year',
        'examination_number',
        'course_of_study_id',
        'gender_id',
        'nationality_id',
        'state_id',
        'date_of_birth',
        'examination_type_id',
        'exam_titles_and_scores'
    ];
}
