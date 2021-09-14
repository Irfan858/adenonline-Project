<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $fillable = ['user_id','product_id'];

    public function user()
    {
        return $this->hasMany(User::class,'id','user_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class,'id','product_id');
    }

    use HasFactory;
}
