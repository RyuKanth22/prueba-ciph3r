<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductosDivisaRequest;
use App\Models\ProductosDivisa;
use App\Models\Divisa;
use App\Models\Producto;
use App\Services\ProductosDivisaServices;
use Illuminate\Support\Facades\DB;
use OpenApi\Annotations as OA;

class ProductosDivisaController extends Controller
{
    protected $productoDivisaService;

     public function __construct(ProductosDivisaServices $productoDivisaService)
    {
        $this->productoDivisaService = $productoDivisaService;
    }
    public function storePrice(StoreProductosDivisaRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $data = $request->validated();
            $response = $this->productoDivisaService->addPriceProduct($data,$id);
            DB::commit();
            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error creando productos divisa',
                'message' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }
    public function prices($id)
    {
        try{
        $data = $this->productoDivisaService->getPriceProduct($id);
        return response()->json($data, 200);
        }catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al consultar los precios del producto',
                'message' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }
}
