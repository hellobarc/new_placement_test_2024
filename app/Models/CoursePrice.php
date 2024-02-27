<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'bundle_id',
        'course_level',
        'package',
        'duration',
        'individual_price',
        'discount',
        'offered_price',
        'total_price'
    ];

    public function CourseBundle()
    {
        return $this->belongsTo(CourseBundle::class);
    }
}
