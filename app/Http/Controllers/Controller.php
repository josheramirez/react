<?php

use Illuminate\Http\Request;
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function subirArchivo(Request $request)
    {
        // dd($request->all);
           //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
           $request->file('archivo')->store('public');
           dd("subido y guardado");
    }
}
