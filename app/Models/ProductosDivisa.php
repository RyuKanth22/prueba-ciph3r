<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductosDivisa extends Model
{
    /** @use HasFactory<\Database\Factories\ProductosDivisaFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = ['producto_id', 'divisa_id', 'price'];

    public function product()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function currency()
    {
        return $this->belongsTo(Divisa::class,'divisa_id');
    }
}
