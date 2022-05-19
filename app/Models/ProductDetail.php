<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hasProduct()
    {
        return $this->hasone(Product::class, 'slug' , 'product_slug');
    }

    public function hasCarType()
    {
        return $this->hasOne(CarType::class, 'slug', 'car_type_slug');
    }
}
