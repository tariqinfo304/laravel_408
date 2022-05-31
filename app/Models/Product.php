<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table="product";


    function images()
    {
        return $this->hasMany(ProductImages::class,"product_id","id");
    }


    function info()
    {
        return $this->hasOne(ProductInfo::class,"product_id","id");
    }
}
