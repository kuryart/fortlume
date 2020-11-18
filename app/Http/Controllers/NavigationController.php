<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Obra;
use Illuminate\Support\Facades\Log;

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

    public function dashboardCategorias()
    {
        $categorias = Categoria::all();
        $produtos = Produto::all();
        return view('dashboard')->with(compact('categorias', 
                                               'produtos'));
    }

    public function dashboardProdutos()
    {
        $categorias = Categoria::all();
        $produtos = Produto::all();
        return view('dashboard-produtos')->with(compact('categorias', 
                                               'produtos'));
    }

    public function dashboardObras()
    {
        $obras = Obra::all();
        return view('dashboard-obras')->with(compact('obras'));
    }

    public function getAllProdutosFromCategoria(Categoria $categoria)
    {
        $categorias = Categoria::all();
        $produtos = Produto::all()->where('categoria_id', $categoria->id);
        $categoriaFinal = $categoria;

        return view('produto.produto')->with(compact('categorias', 
                                                     'produtos',
                                                     'categoriaFinal'));
    }
}
