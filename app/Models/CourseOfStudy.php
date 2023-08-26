<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseOfStudy extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'name',
        'display_name',
        'description'
    ];
}
