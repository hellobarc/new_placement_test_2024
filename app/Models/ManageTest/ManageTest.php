<?php

namespace App\Models\ManageTest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageTest extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'time',
        'status',
    ];
}
