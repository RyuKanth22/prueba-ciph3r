<?php

namespace App\Services;

use App\Models\Producto;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class ProductoService
{
    public function list()
    {
        return Producto::all();
    }
    public function createProduct(array $producto)
    {
        return Producto::create($producto);
    }

    public function updateProduct(array $data, $producto_id)
    {
        try {
            $producto = Producto::findOrFail($producto_id);
            $producto->update($data);
            return [
                'mensaje' => 'Producto actualizado correctamente.',
                'status' => true
            ];
        } catch (ModelNotFoundException $e) {
            return [
                'mensaje' => 'El producto a actualizar no existe.',
                'status' => false
            ];
        }
    }

    public function show($id)
    {
        try {
            $producto = Producto::findOrFail($id);
            return [
                'mensaje' => 'Producto encontrado.',
                'status' => true,
                'data' => $producto
            ];
        } catch (ModelNotFoundException $e) {
            return [
                'mensaje' => 'Producto no encontrado.',
                'status' => false,
                'data' => null
            ];
        }
    }

    public function delete($id)
    {
        try {
            $producto = Producto::findOrFail($id);
            $producto->delete();
            return [
                'mensaje' => 'Producto eliminado.',
                'status' => true
            ];
        } catch (ModelNotFoundException $e) {
            return [
                'mensaje' => 'Producto no encontrado.',
                'status' => false
            ];
        }
    }
}