<?php
    function suma($a, $b) {
        return $a + $b;
    }

    function resta($a, $b) {
        return $a - $b;
    }

    function multiplicacion($a, $b) {
        return $a * $b;
    }

    function division($a, $b) {
        if ($b == 0) {
            return "Error: división por cero no permitida";
        } else {
            return $a / $b;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "Error: Ambos valores deben ser números.";
        } else {
            switch ($operacion) {
                case "suma":
                    $resultado = suma($num1, $num2);
                    echo "La suma de $num1 y $num2 es: $resultado";
                    break;
                case "resta":
                    $resultado = resta($num1, $num2);
                    echo "La resta de $num1 y $num2 es: $resultado";
                    break;
                case "multiplicacion":
                    $resultado = multiplicacion($num1, $num2);
                    echo "La multiplicación de $num1 y $num2 es: $resultado";
                    break;
                case "division":
                    $resultado = division($num1, $num2);
                    if (is_numeric($resultado)) {
                        echo "La división de $num1 entre $num2 es: $resultado";
                    } else {
                        echo $resultado;
                    }
                    break;
                default:
                    echo "Error: Operación no reconocida.";
                    break;
            }
        }
    }
?>