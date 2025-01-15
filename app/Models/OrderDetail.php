<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    /** @use HasFactory<\Database\Factories\OrderDetailFactory> */
    use HasFactory;
    protected $fillable = ['name','email','address','phone','amount','note','status','payment_method','user_id','discount_id'];


    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Order(){
        return $this->belongsTo(Order::class);
    }
}
