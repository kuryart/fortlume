<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categoria = Categoria::all();
        return view('categorias-admin')->with('categoria');;
    }
}
