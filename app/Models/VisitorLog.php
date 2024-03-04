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
        'assign_advisor',
        'time_log',
        'adviser_notification',
        'front_desk_notification'
    ];

    protected $attributes = [
        'front_desk_notification' => 'not_seen',
        'adviser_notification' => 'not_seen'
    ];
    
    public function totalUser(){
        return $this->hasMany(User::class, 'id', 'assign_advisor');
    }
    
}
