<?php

namespace App\Models\TestSubmission;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ManageTest\ManageTestQuestion;
class TestSubmission extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'activity_log_id',
        'question_id',
        'sub_question_id',
        'exercise_id',
        'question_type',
        'answered_text',
        'submitted_ans',
        'is_correct',
        'obtained_mark',
    ];
    public function testQuestion()
    {
        return $this->belongsTo(ManageTestQuestion::class, 'question_id');
    }
}
