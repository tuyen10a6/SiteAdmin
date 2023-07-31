<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TopProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
