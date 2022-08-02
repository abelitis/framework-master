<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('vista_lib');
    }


    public function guardadatos()
    {
        $libmodel = new \App\Models\libs_model();
        
   

        
        $data = [
            'nombre' => $_POST['nombre'] ?? null,
            'paginas'  => $_POST['paginas'] ?? null,
            'autor'  => $_POST['autor'] ?? null,
        ];
        $libmodel->insertdata($data);
        echo 'Ingresada';

        return view('visteregresar');
    }




}
