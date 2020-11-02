<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

        //indicar qual a chave primária da tabela autores
    protected $primarykey="ida";

    //esta propriedade não é necessária 
    //mas vai ajudar-nos em situação futuras
    protected $table="autores";
}
