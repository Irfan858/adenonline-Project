<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['storeName','storeAddress','district_id','category_id'];

    public function district()
    {
        return $this->hasOne(District::class,'id','district_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
    use HasFactory;
}
