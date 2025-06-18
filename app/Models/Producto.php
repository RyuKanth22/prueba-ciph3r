<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    /** @use HasFactory<\Database\Factories\ProductoFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'description', 'price', 'tax_cost', 'manufacturing_cost', 'divisa_id'
    ];

    public function currency()
    {
        return $this->belongsTo(Divisa::class);
    }

    public function prices()
    {
        return $this->hasMany(ProductosDivisa::class);
    }
}
