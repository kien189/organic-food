<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStatic extends Model
{
    /** @use HasFactory<\Database\Factories\ProductStaticFactory> */
    use HasFactory;
    protected $guarded = [];

   public function products(){
       return $this->belongsTo(Product::class);
   }

}
