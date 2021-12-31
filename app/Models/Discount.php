<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    const MAX_DISCOUNT_VALUE = 99;


    protected $fillable = [
        'discount',
    ];

    public function prices()
    {
        return $this->belongsToMany(Price::class);
    }
}
