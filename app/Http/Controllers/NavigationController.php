<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Obra;

class NavigationController extends Controller
{
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
        return view('dashboard-obras')->with('obras');
    }
}
