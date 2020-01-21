<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct() 
    {
         //$this->middleware('auth');
        $this->middleware('auth')->only([
            'categoria'
        ]);
    }

    public function index()
    {
        return view('site.home.index');
    }
    public function contato()
    {
        return view('site.contato.contato');
    }
    public function categoria($id)
    {
        return "<h1>Listagem dos posts da categoria: {$id}</h1>";
    }
    public function categoriaOp($id = 1)
    {
        return "<h1>Listagem dos posts da categoria: {$id}</h1>";
    }
}
