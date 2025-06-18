<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Services\ProductoService;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    protected $productoService;
    public function __construct(ProductoService $productoService)
    {
        $this->productoService = $productoService;
    }
    public function index()
    {
        return response()->json($this->productoService->list(), 200);
    }
    public function store(StoreProductoRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->productoService->createProduct($request->validated());
            DB::commit();
            return response()->json("Producto creado", 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Error creando producto', 'message' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $response = $this->productoService->show($id);
            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error mostrando producto',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function update(UpdateProductoRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $validate = $request->validated();
            $response = $this->productoService->updateProduct($validate, $id);
            DB::commit();
            return response()->json($response);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error actualizando producto',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $response = $this->productoService->delete($id);
            DB::commit();
            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error eliminando producto',
                'message' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }
}
