<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = persona::paginate(2);
        return view('modulos/persona/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('modulos/persona/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'ci' => 'required|string|unique:persona,ci|max:20',
            'fecha_nacimiento' => 'required|date',
            'celular' => [
                'required',
                'string',
                'max:15',
                'regex:/^[6|7][0-9]{7,14}$/',
            ],
        ], [
            'celular.regex' => 'El número de celular debe comenzar con 6 o 7 y tener entre 8 y 15 dígitos.',
        ]);

        $item = new Persona();
        $item -> nombre = $request->nombre;
        $item -> apellido = $request->apellido;
        $item -> ci = $request->ci;
        $item -> fecha_nacimiento = $request->fecha_nacimiento;
        $item -> celular = $request->celular;
        $item -> save();
        return to_route('index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Persona::find($id);
        return view('modulos/persona/show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Persona::find($id);
        return view('modulos/persona/edit', compact('item'));
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Persona::find($id);
        $item -> nombre = $request->nombre;
        $item -> apellido = $request->apellido;
        $item -> ci = $request->ci;
        $item -> fecha_nacimiento = $request->fecha_nacimiento;
        $item -> celular = $request->celular;
        $item -> save();
        return to_route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Persona::find($id);
        $item -> delete();
        return to_route('index');
    }
}
