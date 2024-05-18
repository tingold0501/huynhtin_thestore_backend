<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'producttypes';
    protected $fillable = [
      'id',
      'name',
      'created_at',
      'updated_at',  
    ];
    use HasFactory;
}
