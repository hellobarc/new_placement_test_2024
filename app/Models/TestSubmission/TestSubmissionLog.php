<?php

namespace App\Models\TestSubmission;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestSubmissionLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'advisor_id',
        'test_id',
        'status',
        'test_start',
        'test_end'
    ];
}
