<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deal extends Model
{
    use HasFactory, SoftDeletes;

    public function hasCreatedBy()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }

    public function hascategory()
    {
        return $this->hasOne(categories::class, 'id' , 'category');
    }

    public function hasRental()
    {
        return $this->hasOne(Rental::class, 'id' , 'deal_product');
    }

    public function hasProperty()
    {
        return $this->hasOne(Property::class, 'id' , 'deal_product');
    }

    public function hasRV()
    {
        return $this->hasOne(RV::class, 'id' , 'deal_product');
    }
}
