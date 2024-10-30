<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use InvalidArgumentException;

class Product extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'unit',
        'brand_id',
        'description',
        'stock',
        'boarding_date'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->id = (string) Str::uuid();
            $product->validateUnit($product->unit);
        });

        static::updating(function ($product) {
            $product->validateUnit($product->unit);
        });
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    protected function validateUnit($unit)
    {
        $allowedUnits = ['Unidad', 'Display', 'Caja'];

        if (!in_array($unit, $allowedUnits)) {
            throw new InvalidArgumentException("El valor de 'unit' debe ser uno de: " . implode(', ', $allowedUnits));
        }
    }
}