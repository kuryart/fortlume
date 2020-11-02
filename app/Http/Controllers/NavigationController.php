<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Obra;

class NavigationController extends Controller
{
    public function home()
    {
        $categorias = Categoria::all();
        $produtos = Produto::all();
        $obras = Obra::all();
        return view('index.index')->with(compact('categorias', 
                                                 'produtos',
                                                 'obras'));        
    }

    public function produtos()
    {
        $categorias = Categoria::all();
        $produtos = Produto::all();
        return view('produtos.produtos')->with(compact('categorias', 
                                                       'produtos'));        
    }

    public function obras()
    {
        $categorias = Categoria::all();
        $obras = Obra::all();
        return view('obras.obras')->with(compact('categorias',
                                                 'obras'));        
    }    

    public function dashboardProdutos()
    {
        $categorias = Categoria::all();
        $produtos = Produto::all();
        return view('dashboard')->with(compact('categorias', 
                                               'produtos'));
    }

    public function dashboardObras()
    {
        $obras = Obra::all();
        return view('dashboard-obras')->with(compact('obras'));
    }
}
