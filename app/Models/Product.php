<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'category_id',
        'name',
        'slug',
        'price',
        'default_img',
        'description',
        'status'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function topProduct(): HasOne
    {
        return $this->hasOne(TopProduct::class);
    }

    public function productVideos(): HasMany
    {
        return $this->hasMany(ProductVideos::class);
    }
}
