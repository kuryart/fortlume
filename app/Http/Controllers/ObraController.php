<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obra;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

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
        // Log::debug($request->video);
        
        $request->validate([
            'video' => 'required|mimes:mp4,flv,m3u8,ts,3gp,mov,avi,wmv|',
        ]);

        // Armazena imagem
        $imageExtension = $request->video->extension();
        $imageName = time().'.'.$imageExtension;
        $imagePath = 'vid/obras';
        $imageStorePath = $request->file('video')->storeAs($imagePath, $imageName, 'public');
        // $imageStorePath = Storage::disk('public')->putFileAs('vid/obras', $request->file('video'), imageName);
        $imageUrl = '/storage/'.$imageStorePath;
        
        // $imageUrl = $imageStorePath;

        $obra = Obra::create([
          'video_url' => $imageUrl,
        ]);

        // toastr()->success('Obra criado com sucesso.');

        return redirect()->route('dashboard.obras');
    }

    public function update(Request $request, Obra $obra)
    {
        $request->validate([
            'video' => 'required|video|mimes:mp4,flv,m3u8,ts,3gp,mov,avi,wmv|',
        ]);

        // Armazena imagem
        $imageExtension = $request->video->extension();
        $imageName = time().'.'.$imageExtension;
        $imagePath = 'vid/obras';
        $imageStorePath = $request->file('video')->storeAs($imagePath, $imageName, 'public');
        $imageUrl = '/storage/'.$imageStorePath;
        $oldImageUrl = str_replace('/storage', "", $obra->video_url);

        $obra->update([
            'video_url' => $imageUrl,
        ]);

        Storage::disk('public')->delete($oldImageUrl);

        return redirect()->route('dashboard.obras');
    }

    public function destroy(Obra $obra)
    {
        $oldImageUrl = str_replace('/storage', "", $obra->video_url);
        $obra->delete();
        Storage::disk('public')->delete($oldImageUrl);

        return redirect()->route('dashboard.obras');
    }    

}
