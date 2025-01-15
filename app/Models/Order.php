<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;
    protected $fillable = ['quantity','product_id','user_id','order_detail_id'];

    public function OrderDetails(){
        return $this->hasMany(OrderDetail::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
