<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte;

class ProducteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productes =Producte::all(); //Array con todos los productos
        return view('productes.index', compact('productes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'nom' => 'required|string|max:255',
            'preu' => 'required|numeric',
            'descripcio' => 'string',
        ]);

        Producte::create([
            'name' => $data['nom'],
            'price' => $data['preu'],
            'description' => $data['descripcio'] ?? null,
        ]);
        return redirect()->route('productes.index');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
