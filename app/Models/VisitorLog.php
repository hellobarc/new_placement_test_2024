<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'mobile',
        'purpose_of_visit',
        'status',
        'assign_advisor'
    ];
    public function totalUser(){
        return $this->hasMany(User::class, 'id', 'assign_advisor');
    }
}
