<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obra;

class ObraController extends Controller
{
    public function indexAdmin()
    {
        $obras = Obra::all();
        return view('obras-admin')->with('obra');
    }

    public function indexGuest()
    {
        $obras = Obra::all();
        return view('obras-admin')->with('obra');
    }

    public function getAll()
    {
        return Obra::all();
    }

    public function getByIndex(int $index)
    {
        return Obra::where('id', index);
    }

    public function getByColumn($column, $value)
    {
        return Obra::where($column, $value);
    }

    public function store(Request $request)
    {                
        $request->validate([
            'video_url' => 'required|video|mimes:mp4,flv,m3u8,ts,3gp,mov,avi,wmv|',
        ]);

        // Armazena imagem
        $imageExtension = $request->foto->extension();
        $imageName = time().'.'.$imageExtension;
        $imagePath = 'img/obras';
        $imageStorePath = $request->file('foto')->storeAs($imagePath, $imageName, 'public');
        $imageUrl = '/storage/'.$imageStorePath;
        
        // $imageUrl = $imageStorePath;

        $obra = Obra::create([
          'video_url' => $imageUrl,
        ]);

        // toastr()->success('Obra criado com sucesso.');

        return redirect()->route('dashboard');
    }

    public function update(Request $request, Obra $obra)
    {
        $request->validate([
            'nome' => 'required|max:150',
            'descricao' => 'required|max:700',
            'categoria_id' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|',
        ]);

        // Armazena imagem
        $imageExtension = $request->foto->extension();
        $imageName = time().'.'.$imageExtension;
        $imagePath = 'img/obras';
        $imageStorePath = $request->file('foto')->storeAs($imagePath, $imageName, 'public');
        $imageUrl = '/storage/'.$imageStorePath;
        
        // $imageUrl = $imageStorePath;

        $obra->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'categoria_id' => $request->categoria_id,
            'foto_url' => $imageUrl,
        ]);

        // toastr()->success('Obra atualizado com sucesso.');
        return redirect()->route('dashboard');
    }

    public function destroy(Obra $obra)
    {
        $obra->delete();

        // toastr()->success('Obra excluído com sucesso.');
        return redirect()->route('dashboard');
    }    

}
