<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseBundle extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_bundle',
        'price',
        'discount_price',
        'priviliged_price',
    ];

    public function CoursePrice()
    {
        return $this->hasMany(CoursePrice::class, 'bundle_id');
    }
}
