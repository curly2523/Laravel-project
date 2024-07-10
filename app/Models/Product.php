<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'storage',
        'category_id',
        'cost',
        'quantity',
        'reorder_Level',
        
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

}
