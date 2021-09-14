<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['districtName'];

    public function village()
    {
        return $this->belongsToMany(Village::class,'id','village_id');
    }
    
    use HasFactory;
}
