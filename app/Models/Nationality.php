<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'country_name',
        'country_display_name',
        'state_name',
        'state_display_name',
        'description'
    ];
}
