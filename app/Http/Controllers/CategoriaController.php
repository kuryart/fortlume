<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function indexAdmin()
    {
        $categorias = Categoria::all();
        return view('categorias-admin')->with('categoria');
    }

    public function indexGuest()
    {
        $categorias = Categoria::all();
        return view('categorias-admin')->with('categoria');
    }

    public function getAll()
    {
        return Categoria::all();
    }

    public function getByIndex(int $index)
    {
        return Categoria::where('id', index);
    }

    public function getByColumn($column, $value)
    {
        return Categoria::where($column, $value);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:150',
        ]);

        $categoria = Categoria::create([
          'nome' => $request->nome,
        ]);

        // toastr()->success('Produto criado com sucesso.');

        return redirect()->route('dashboard');
    }

    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
          'nome' => 'required|max:150',
        ]);

        $categoria->update([
          'nome' => $request->nome,
        ]);

        // toastr()->success('Produto atualizado com sucesso.');
        return redirect()->route('dashboard');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        // toastr()->success('Produto excluído com sucesso.');
        return redirect()->route('dashboard');
    }
}
