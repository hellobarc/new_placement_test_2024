<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseBundle extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_bundle',
        'status'
    ];
}
