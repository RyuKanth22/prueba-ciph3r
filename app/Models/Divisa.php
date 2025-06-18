<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Divisa extends Model
{
    /** @use HasFactory<\Database\Factories\DivisaFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'symbol', 'exchange_rate'];

    public function products()
    {
        return $this->hasMany(Producto::class);
    }

    public function productPrices()
    {
        return $this->hasMany(ProductosDivisa::class);
    }
}
