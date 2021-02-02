<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Proveedor;
use App\Tipo;
use Illuminate\Http\Request;
use Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo = Tipo::all();
        $proveedor = Proveedor::all();
        return view('productos.create', compact('tipo', 'proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'cantidad' => 'required',
            'compra' => 'required',
            'venta' => 'required',
            'venc' => 'required',
            'prod' => 'required',
            'tipo_id' => 'required',
            'prove_id' => 'required',
        ]);

        Producto::create($request->all());

       
        Session::flash('message','Producto creado correctamente');
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'cantidad' => 'required',
            'compra' => 'required',
            'venta' => 'required',
            'venc' => 'required',
            'prod' => 'required',
            'tipo_id' => 'required',
            'prove_id' => 'required',
        ]);


        $producto->update($request->all());
       
        Session::flash('message','Producto actualizado correctamente');
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        Session::flash('message','Producto borrado correctamente');
        return redirect()->route('productos.index');
    }
}
