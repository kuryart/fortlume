<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obra;

class ObraController extends Controller
{
    public function index()
    {
        $obra = Obra::all();
        return view('obras-admin')->with('obra');;
    }
}
