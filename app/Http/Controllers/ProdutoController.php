<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public static function lastProducts(){

    }

    public function all() {
    	$produtos = Produto::all();
    }
}
