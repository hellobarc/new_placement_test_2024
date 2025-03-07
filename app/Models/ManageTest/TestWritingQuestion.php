<?php

namespace App\Models\ManageTest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestWritingQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'test_question_id',
        'question',
        'marks',
    ];
    public function testQuestion()
    {
        return $this->belongsTo(ManageTestQuestion::class, 'test_question_id');
    }
}
