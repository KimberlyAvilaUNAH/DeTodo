<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $proveedor = new Proveedor();
        $proveedor->nombre = $request->input('nombre');
        $proveedor->fechaRegistro = $request->input('fechaRegistro');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->correo = $request->input('correo');
        $proveedor->save();

        return redirect()->route('proveedores.index');
    }
}
