<?php


function calculadora(string $operacion, int $num1, int $num2)
    {
            $resultado = 0;

            switch ($operacion) {
              case 'suma':
                $resultado = $num1 + $num2;
                break;

              case 'resta':
                $resultado = $num1 - $num2;
                break;

              case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;

              default:
                $resultado = null;
                break;
            }

            return $resultado;
    }


    $operacion = $argv[1];
    $num1 = $argv[2];
    $num2 = $argv[3];

    $valor = calculadora($operacion, $num1, $num2);

    if ( $valor == null) {
      echo 'Sintaxis: \'operacion\' numero1 numero2' . PHP_EOL;
    } else {
      echo $valor . PHP_EOL;
    }
