<?php

namespace App\Models\ManageTest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageTestSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'test_id',
        'module_id',
        'instruction',
    ];
    public function manageTest()
    {
        return $this->belongsTo(ManageTest::class, 'test_id');
    }
}
