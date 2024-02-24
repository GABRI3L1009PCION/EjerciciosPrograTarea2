<?php
// Definir el número para calcular el factorial
$numeroBase = 5;

// Inicializar variables
$factorial = 1;
$contador = 1;

// Calcular el factorial usando un bucle while
while ($contador <= $numeroBase) {
    $factorial *= $contador;
    $contador++;
}

// Mostrar el resultado
echo "El factorial de $numeroBase es: $factorial";
?>
