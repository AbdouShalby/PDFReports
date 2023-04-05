<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'leave_id',
        'national_id',
        'national_type',
        'name',
        'print_date',
        'nationality',
        'birth_date',
        'work',
        'admission',
        'discharge',
        'details',
        'signature',
        'status',
    ];
}
