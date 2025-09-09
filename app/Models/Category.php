<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // الأعمدة المسموح تعبئتها
    protected $fillable = [
        'name',
        'slug',
    ];

    // علاقة: التصنيف يحتوي على منتجات
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
