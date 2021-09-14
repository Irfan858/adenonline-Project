<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $fillable = ['villageName','district_id'];

    public function district()
    {
        return $this->hasOne(District::class,'id','district_id');
    }
    use HasFactory;
}
