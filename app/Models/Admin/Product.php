<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'productsku',
        'productname',
        'productdescription',
        'productsellingprice',
        'productofferprice',
        'productbatchno',
        'productexpirydate',
        'producthsnno',
        'status',
    ];
}
