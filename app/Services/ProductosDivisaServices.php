<?php

namespace App\Services;

use App\Models\ProductosDivisa;

class ProductosDivisaServices
{
    public function getPriceProduct($id)
    {
        return ProductosDivisa::with(['currency', 'product'])
            ->where('producto_id', $id)
            ->get()
            ->map(function ($data) {
                return [
                    'nombre' => $data->product->name,
                    'divisa' => $data->currency->name,
                    'price' => $data->price,
                ];
            });
    }
    public function addPriceProduct(array $data, $id_producto)
    {
        $data['producto_id'] = intval($id_producto);
        ProductosDivisa::updateOrCreate(
            [
                'producto_id' => $data['producto_id'],
                'divisa_id' => $data['divisa_id']
            ],
            [
                'price' => $data['price']
            ]
        );
        return [
            'mensaje' => 'Precio agregado',
            'status' => true
        ];

    }
}