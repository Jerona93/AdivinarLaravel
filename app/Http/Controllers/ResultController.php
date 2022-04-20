<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result(Request $request)
    {
        $numero = $request->get('numero');
        $min = 1;
        $max= 10000000000;
        $aleatorio = rand($min, $max);
        $contador = 0;
        $menores = array();;
        $mayores = array();
        $variables = array(1,2,3,4);
        
        if ($numero >= $min && $numero<=$max){    
            while ($aleatorio != $numero) {
                

                if ($aleatorio < $numero ){
                    //Lineas para ver el proceso de "adivinar" el numero:
                    //echo "El numero es MAYOR, mete otro numero: <br>";
                    array_unshift($menores, $aleatorio);
                    $aleatorio1 = $aleatorio;
                    //$aleatorio = rand($aleatorio1, $max);
                    $aleatorio = rand(max($menores), $max);

                    //echo $aleatorio."<br>";
                    //Para ver el numero mas alto de los "menores" que se guardan en el array:
                    // echo "numero mas alto". max($menores)."<br>";
                    //Para ver el array de los numeros menores:
                    //print_r($menores)."<br>";
                    
                    
                }
                else if($aleatorio > $numero){
                    //Lineas para ver el proceso de "adivinar" el numero:
                  // echo "El numero es MENOR, mete otro numero: ";
                    array_unshift($mayores, $aleatorio);
                    //$aleatorio1 = $aleatorio;
                    //$aleatorio = rand($min, $aleatorio1);
                    $aleatorio = rand($min, min($mayores));

                    //echo $aleatorio."<br>";
                    //Para ver el numero mas bajo de los "mayores" que se guardan en el array
                    //echo "numero mas bajo". min($mayores)."<br>";
                    //Para ver el array de los numeros mayores:
                    //print_r($mayores)."<br>";
                }
                $contador++;
            }
            return view('result')
            ->with('contador', $contador)
            ->with('numero', $numero)
            ->with('variables', $variables)
            ->with('aleatorio', $aleatorio);
        }else{
            $warning = true;
            $error = "Mete un numero correcto";
            return view('adivinar')
            ->with('error', $error)
            ->with('warning', $warning)
            ->with('contador', $contador);
        }
        if ($aleatorio == $numero){
			echo"\n Has acertado el numero aleatorio!";
			echo" Lo has intentado ",$contador," veces";
		}
    }
    
}
