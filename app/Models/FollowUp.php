<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUp extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'adviser_id',
        'remarks',
        'admission_status',
        'current_follow_up_date',
        'next_follow_up_date'
    ];
}
