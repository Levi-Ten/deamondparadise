<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'service',
        'price',
    ];


    public function discounts()
    {
        return $this->belongsToMany(Discount::class);
    }

    public function getDiscountsSumAttribute()
    {
        return $this->discounts->sum('discount');
    }

    public function getDiscountedPriceAttribute()
    {
        return $this->price - ($this->price * ($this->discounts_sum / 100));
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($service) {
            $service->discounts()->detach();
        });
    }
}
