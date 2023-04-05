<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewScene extends Model
{
    use HasFactory;

    protected $fillable = [
        'leave_id',
        'admission',
        'discharge',
        'waiting_period',
        'issue_date',
        'name',
        'national_id',
        'nationality',
        'employer',
        'physician_name',
        'position',
        'visit_type',
        'medical_complex',
    ];
}
