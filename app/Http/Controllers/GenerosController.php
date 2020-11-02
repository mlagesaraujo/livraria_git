<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
    //
	public function index(){
   		//$generos=Genero::all();
	    
		//$generos=Genero::all()->sortbydesc('idg');
		$generos=Genero::paginate(4);

	    return view ('generos.index', [
	    	'generos'=>$generos
	    ]);
	}


}
