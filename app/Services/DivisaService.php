<?php

namespace App\Services;

use App\Models\Divisa;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DivisaService
{
    public function list()
    {
        return Divisa::all();
    }

    public function createDivisa(array $data)
    {
        Divisa::create($data);
        return [
            'mensaje' => 'Divisa Creada',
            'status' => true
        ];
    }

    public function delete($id)
    {
        try {
            $divisa = Divisa::findOrFail($id);
            $divisa->delete();
            return [
                'mensaje' => 'Divisa eliminada',
                'status' => true,
            ];
        } catch (ModelNotFoundException $e) {
            return [
                'mensaje' => 'Divisa no encontrado.',
                'status' => false
            ];
        }
    }
}