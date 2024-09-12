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
        'visit_branch',
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
    public function userInfo(){
        return $this->belongsTo(VisitorInfo::class, 'id', 'visitor_log_id');
    }
    public function followUp(){
        return $this->belongsTo(FollowUp::class, 'id', 'student_id');
    }
}
