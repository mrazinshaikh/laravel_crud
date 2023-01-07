<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected function isDelivered(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? 'Yes' : 'No',
        );
    }
}
