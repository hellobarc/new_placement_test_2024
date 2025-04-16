<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_level',
        'regular_price',
        'discount_price',
    ];

    public function CourseBundle()
    {
        return $this->belongsTo(CourseBundle::class);
    }
}
