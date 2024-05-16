<?php

namespace App\Models\ManageTest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageTestQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'test_id',
        'section_id',
        'question_type',
        'instruction',
    ];
    public function test()
    {
        return $this->belongsTo(ManageTest::class, 'test_id');
    }
    public function testSection()
    {
        return $this->belongsTo(ManageTestSection::class, 'section_id');
    }
}
