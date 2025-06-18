<?php

namespace App\Http\Controllers;

use App\Models\Divisa;
use App\Http\Requests\StoreDivisaRequest;
use App\Http\Requests\UpdateDivisaRequest;
use App\Services\DivisaService;
use Illuminate\Support\Facades\DB;

class DivisaController extends Controller
{

    protected $divisaService;
    public function __construct(DivisaService $divisaService)
    {
        $this->divisaService = $divisaService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->divisaService->list());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDivisaRequest $request)
    {
        try{
            DB::beginTransaction();
            $response = $this->divisaService->createDivisa($request->validated());
            DB::commit();
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json([
                'error' => 'Error creando divisa',
                'message' => $e->getMessage(),
                'status' => false
            ], 500);
        }
        }

    /**
     * Display the specified resource.
     */
    public function show(Divisa $divisa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Divisa $divisa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDivisaRequest $request, Divisa $divisa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($divisa)
    {
        try{
            DB::beginTransaction();
            $response = $this->divisaService->delete($divisa);
            DB::commit();
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json([
                'error' => 'Error eliminando divisa',
                'message' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }
}
