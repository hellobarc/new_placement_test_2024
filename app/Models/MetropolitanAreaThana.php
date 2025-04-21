<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetropolitanAreaThana extends Model
{
    use HasFactory;
    protected $fillable = [
        'upazilla_id',
        'name',
        'bn_name'
    ];

    public function Upazilla(){
        return $this->belongsTo(Upazilla::class, 'upazilla_id');
    } 
}
