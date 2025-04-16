<?php

namespace App\Models\TestSubmission;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{
    VisitorLog,
    VisitorInfo,
};
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
    public function student()
    {
        return $this->belongsTo(VisitorLog::class, 'student_id');
    }
}
