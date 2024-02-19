<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitor_log_id',
        'purpose_of_ielts',
        'occupation',
        'address',
        'location',
        'education',
        'organization',
        'date_of_birth',
        'expected_country',
        'expected_score',
        'how_you_know',
        'branch_recomendation'    
    ];
}
