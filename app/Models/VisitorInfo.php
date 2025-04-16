<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitor_log_id',
        'specific_course',
        'occupation',
        'address',
        'location',
        'organization',
        'date_of_birth',
        'education',
        'how_you_know',
        'expected_country',
        'school_goes',
        'expected_score',
        'refer_stu_name',
        'refer_phone_number',
        'refer_batch_name',
        'purpose_of_ielts',
        'ielts_test_center',
        'ielts_exam_type',
        'category_of_ielts',
        'ielts_can_id',
        'ielts_exam_date',
        
        'ielts_enough_time',
        'ielts_taken',
        'topics_improvement',
        'topics_strengths',
        'first_current_level',
        'speaking_expected_module',
        'nid_passport_number',
        'blood_group',
        'emergency_number',
        'suggested_course',
        'total_enroll_course',
        'comments_from_student',
        'feedback_from_advisor',
    ];
    public function studentInfo(){
        return $this->belongsTo(VisitorLog::class, 'visitor_log_id');
    }
}
