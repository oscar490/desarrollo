<?php


function calculadora(string $operacion, int $num1, int $num2) : int
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


    echo calculadora($operacion, $num1, $num2) . PHP_EOL;
