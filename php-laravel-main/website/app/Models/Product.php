<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function detail() {
        return $this->belongsToMany(
            Order::class,'order_items','order_id','product_id'
        )->withPivot('quantity');
    }
}
