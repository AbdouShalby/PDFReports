<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SickLeave extends Model
{
    use HasFactory;

    protected $fillable = [
        'leave_id',
        'leave_start',
        'leave_end',
        'leave_duration',
        'issue_date',
        'name_en',
        'name_ar',
        'national_id',
        'nationality',
        'employer',
        'physician_name',
        'position',
        'medical_complex',
    ];
}
