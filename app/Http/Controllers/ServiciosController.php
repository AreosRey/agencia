<?php

namespace App\Http\Controllers;
use App\Models\Servicios;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicios::all();
        
        return view('servicios.index', ['servicios' => $servicios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'tip_serv' => 'required',
            'descripcion_serv' => 'required',
            'precio_serv' => 'required',
            'duracion_serv' => 'required',
        ]);

        // Crear el nuevo servicio
        Servicios::create($request->all());

        // Redireccionar a la página de listado de servicios
        return redirect()->route('servicios.index')->with('success', 'Servicio creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servicio = Servicios::findOrFail($id);
        return view('servicios.edit', ['servicio' => $servicio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos
        $request->validate([
            'tip_serv' => 'required',
            'descripcion_serv' => 'required',
            'precio_serv' => 'required',
            'duracion_serv' => 'required',
        ]);

        // Obtener el servicio a actualizar
        $servicio = Servicios::findOrFail($id);

        // Actualizar los datos del servicio
        $servicio->update($request->all());

        // Redireccionar a la página de listado de servicios
        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Obtener el servicio a eliminar
        $servicio = Servicios::findOrFail($id);

        // Eliminar el servicio
        $servicio->delete();

        // Redireccionar a la página de listado de servicios
        return redirect()->route('servicios.index')->with('success', 'Servicio eliminado correctamente');
    }
}
