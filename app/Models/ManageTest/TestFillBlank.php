<?php

namespace App\Models\ManageTest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestFillBlank extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'test_question_id',
        'text',
        'is_show',
        'blank_answer',
        'marks',
    ];
    
    public function testQuestion()
    {
        return $this->belongsTo(ManageTestQuestion::class, 'test_question_id');
    }
}
