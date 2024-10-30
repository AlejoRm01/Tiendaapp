<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Brand extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($brand) {
            $brand->id = (string) Str::uuid(); 
        });
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}