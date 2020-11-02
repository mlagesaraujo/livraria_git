<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutoresController extends Controller
{
    //
    	public function index(){
   		//$livros=Livro::all();
	    
		//$livros=Livro::all()->sortbydesc('idl');
		$autores=Autor::paginate(4);

	    return view ('autores.index', [
	    	'autores'=>$autores
	    ]);
	}
}
