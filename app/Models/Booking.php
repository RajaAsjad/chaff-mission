<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hasProduct()
    {
        return $this->hasOne(Product::class, 'slug', 'product_slug');
    }
    public function hasCustomer()
    {
        return $this->hasOne(User::class, 'id', 'customer_id');
    }
    public function hasPayment()
    {
        return $this->hasOne(Payment::class, 'order_number', 'booking_number');
    }
}
