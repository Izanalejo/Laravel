<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Llistar totes les categories (PÚBLIC)
    public function index()
    {
        return response()->json(Category::all(), 200);
    }

    // Guardar una nova categoria (PRIVAT)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $category = Category::create($request->all());

        return response()->json([
            'message' => 'Categoria creada amb èxit',
            'data' => $category
        ], 201);
    }

    // Mostrar una categoria específica (PÚBLIC)
    public function show(Category $category)
    {
        return response()->json($category, 200);
    }

    // Actualitzar una categoria (PRIVAT)
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $category->update($request->all());

        return response()->json([
            'message' => 'Categoria actualitzada correctament',
            'data' => $category
        ], 200);
    }

    // Eliminar una categoria (PRIVAT)
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'message' => 'Categoria eliminada correctament'
        ], 200);
    }
}
