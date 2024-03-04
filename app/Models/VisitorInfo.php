<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitor_log_id',
        'occupation',
        'address',
        'location',
        'organization',
        'date_of_birth',
        'education',
        'how_you_know',
        'expected_country',
        'purpose_of_ielts',
        'purpose_of_visit',
        'expected_score',
        'branch_recomendation',    
        'comments_from_student',
        'feedback_from_advisor'
    ];
    public function studentInfo(){
        return $this->belongsTo(VisitorLog::class, 'visitor_log_id');
    }
}
