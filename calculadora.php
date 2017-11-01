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

              case 'multi':
                $resultado = $num1 * $num2;
                break;

              default:
                $resultado = null;
                break;
            }

            return $resultado;
    }

    echo calculadora('multi', 12, 6) . PHP_EOL;
