<?php

namespace App\Http\Controllers;

use App\Produto;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
      // Ultimos $produtos
      $ultimosProdutos = Produto::lastProducts();
      // mandando para view
      return view('site.home')->with('produtos', $ultimosProdutos);
    }
}
