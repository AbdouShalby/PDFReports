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
        'issue_date',
        'name',
        'national_id',
        'nationality',
        'employer',
        'physician_name',
        'position',
        'medical_complex',
    ];
}
