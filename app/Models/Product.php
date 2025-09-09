<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // الأعمدة المسموح تعبئتها
    protected $fillable = [
        'name',
        'description',
        'price',
        'on_sale',
        'image',
        'category_id', // لإضافة العلاقة مع التصنيفات
    ];

    // علاقة: المنتج يتبع تصنيف واحد
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
