<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function products (){
       return $this->belongsToMany(products::class,'orders_has_product')
       ->withPivot('amount')
       ->withTimestamps();
    }

}
