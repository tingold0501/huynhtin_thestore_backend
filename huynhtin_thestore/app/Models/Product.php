<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillabel =
    [
        'id',
        'name',
        'price',
        'image',
        'created_at',
        'updated_at',
        'description',
        'producttype_id'  
    ];
    use HasFactory;
}
