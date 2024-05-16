<?php

namespace App\Models\ManageTest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestAudio extends Model
{
    use HasFactory;
    protected $fillable = [
        'test_id',
        'section_id',
        'title',
        'audio',
    ];
    public function manageTest()
    {
        return $this->belongsTo(ManageTest::class, 'test_id');
    }
    public function manageTestSection()
    {
        return $this->belongsTo(ManageTestSection::class, 'section_id');
    }
}
