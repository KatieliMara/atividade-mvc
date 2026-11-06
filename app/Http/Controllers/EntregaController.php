<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntregaController extends Controller
{
    public function index()
    {
        $entregas = [
            ['destinatario' => 'Katieli Mara', 'cidade' => 'São José dos Campos'],
            [ 'destinatario' => 'Benedita Maria','cidade' => 'Lorena'],
            ['destinatario' => 'Ana Luiza','cidade' => 'Guaratinguetá']
        ];
     return view('entregas', ['entregas' => $entregas]);
    }
}