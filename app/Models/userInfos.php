<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userInfos extends Model
{
    use HasFactory;

    protected $fillable= ['cart'];
    protected $casts = [
    'cart' => 'array'
    ];
}
