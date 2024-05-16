<?php

namespace App\Models\TestSubmission;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestSubmissionActivityLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'submission_log_id',
        'module_id',
        'start_log',
        'end_log',
        'finished_part',
        'status',
    ];
}
