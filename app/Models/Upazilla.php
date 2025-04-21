<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazilla extends Model
{
    use HasFactory;
    protected $fillable = [
        'district_id',
        'name',
        'bn_name',
        'url',
    ];
    public function MetroThana(){
        return $this->hasMany(MetropolitanAreaThana::class, 'upazilla_id');
        
    }
}
