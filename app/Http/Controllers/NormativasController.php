<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NormativasController extends Controller
{
    public function __invoke()
    {
        $normativas = [
            ["nombre"=> "Reglamento de servicios de telecomunicaciones", "decreto"=>"Decreto 18 13-FEB-2014", "archivo"=>"archivos/Decreto-18_13-FEB-2014.pdf"],
            ["nombre"=> "Reglamento de reclamos", "decreto"=>"Decreto 194 16-FEB-2013", "archivo"=>"archivos/Decreto-194_16-FEB-2013.pdf"],
            ["nombre"=> "Neutralidad de la red", "decreto"=>"Decreto 368 18-MAR-2011", "archivo"=>"archivos/Decreto-368_18-MAR-2011.pdf"],
            ["nombre"=> "Derechos de los usuarios", "decreto"=>"Derechos de los usuarios de telecomunicaciones", "archivo"=>"archivos/Derechos-de-los-Usuarios.pdf"],
        ];
        return view('normativas', compact("normativas"));
    }
        
    
}
