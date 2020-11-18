<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Log;

class ProdutoController extends Controller
{
    public function indexAdmin()
    {
        $produtos = Produto::all();
        return view('produtos-admin')->with('produto');
    }

    public function indexGuest()
    {
        $produtos = Produto::all();
        return view('produtos-admin')->with('produto');
    }

    public function getAll()
    {
        return Produto::all();
    }

    public function getByIndex(int $index)
    {
        return Produto::where('id', index);
    }

    public function getByColumn($column, $value)
    {
        return Produto::where($column, $value);
    }

    public function store(Request $request)
    {                
        $request->validate([
            'categoria_id' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|',
        ]);

        // Armazena imagem
        $imageExtension = $request->foto->extension();
        $imageName = time().'.'.$imageExtension;
        $imagePath = 'img/produtos';
        $imageStorePath = $request->file('foto')->storeAs($imagePath, $imageName, 'public');
        $imageUrl = '/storage/'.$imageStorePath;
        
        // $imageUrl = $imageStorePath;

        $produto = Produto::create([
          'categoria_id' => $request->categoria_id,
          'foto_url' => $imageUrl,
        ]);

        // toastr()->success('Produto criado com sucesso.');

        return redirect()->route('dashboard.produtos');
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'categoria_id' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|',
        ]);

        // Armazena imagem
        $imageExtension = $request->foto->extension();
        $imageName = time().'.'.$imageExtension;
        $imagePath = 'img/produtos';
        $imageStorePath = $request->file('foto')->storeAs($imagePath, $imageName, 'public');
        $imageUrl = '/storage/'.$imageStorePath;
        
        // $imageUrl = $imageStorePath;

        $produto->update([
            'categoria_id' => $request->categoria_id,
            'foto_url' => $imageUrl,
        ]);

        // toastr()->success('Produto atualizado com sucesso.');
        return redirect()->route('dashboard.produtos');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        // toastr()->success('Produto excluído com sucesso.');
        return redirect()->route('dashboard.produtos');
    }
}
