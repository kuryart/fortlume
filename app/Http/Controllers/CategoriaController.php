<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

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
        return Categoria::where('id', $index);
    }

    public function getByColumn($column, $value)
    {
        return Categoria::where($column, $value);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:150',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|',
        ]);

        // Armazena imagem
        $imageExtension = $request->foto->extension();
        $imageName = time().'.'.$imageExtension;
        $imagePath = 'img/categorias';
        $imageStorePath = $request->file('foto')->storeAs($imagePath, $imageName, 'public');
        $imageUrl = '/storage/'.$imageStorePath;

        $categoria = Categoria::create([
          'nome' => $request->nome,
          'foto_url' => $imageUrl,
        ]);

        // toastr()->success('Produto criado com sucesso.');

        return redirect()->route('dashboard');
    }

    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
          'nome' => 'required|max:150',
          'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|',
        ]);

        // Armazena imagem
        $imageExtension = $request->foto->extension();
        $imageName = time().'.'.$imageExtension;
        $imagePath = 'img/produtos';
        $imageStorePath = $request->file('foto')->storeAs($imagePath, $imageName, 'public');
        $imageUrl = '/storage/'.$imageStorePath;
        $oldImageUrl = str_replace('/storage', "", $categoria->foto_url);

        $categoria->update([
          'nome' => $request->nome,
          'foto_url' => $imageUrl,
        ]);

        Storage::disk('public')->delete($oldImageUrl);

        // toastr()->success('Produto atualizado com sucesso.');
        return redirect()->route('dashboard');
    }

    public function destroy(Categoria $categoria)
    {
        $oldImageUrl = str_replace('/storage', "", $categoria->foto_url);
        $categoria->delete();
        Storage::disk('public')->delete($oldImageUrl);

        // toastr()->success('Produto excluído com sucesso.');
        return redirect()->route('dashboard');
    }
}
