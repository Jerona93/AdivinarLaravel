<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdivinaController extends Controller
{
    public function index()
    {
        $warning=false;
        $prueba="hola";
         return view('adivinar') ->with('warning', $warning);
    }
}
