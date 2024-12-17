<?php

namespace App\Http\Controllers;

use App\Models\detalleVenta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show($id)
    {
        $detalleVenta = DetalleVenta::findOrFail($id);
        return response()->json($detalleVenta);
    }

    public function store(Request $request)
    {
        $detalleVenta = DetalleVenta::create($request->all());
        return response()->json($detalleVenta, 201);
    }

    public function update(Request $request, $id)
    {
        $detalleVenta = DetalleVenta::findOrFail($id);
        $detalleVenta->update($request->all());
        return response()->json($detalleVenta);
    }

    public function destroy($id)
    {
        $detalleVenta = DetalleVenta::findOrFail($id);
        $detalleVenta->delete();
        return response()->json(null, 204);
    }
}
