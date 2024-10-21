<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Método para obtener todas las publicaciones
    public function index()
    {
        $publications = Book::all();
        return response()->json($publications);
    }

    // Método para almacenar nuevas publicaciones
    public function store(Request $request)
    {
        // Validar los datos entrantes
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        // Crear y almacenar la nueva publicación
        $publication = Book::create($request->all());
        return response()->json($publication, 201);
    }

    // Método para buscar publicaciones por título
    public function search(Request $request)
    {
        $title = $request->query('title'); // Obtén el título de los parámetros de consulta

        // Busca publicaciones que contengan el título
        if ($title) {
            $publications = Book::where('title', 'LIKE', '%' . $title . '%')->get();
            return response()->json($publications); // Devuelve las publicaciones que coinciden
        }

        return response()->json([]); // Retorna un array vacío si no se proporciona título
    }
}
