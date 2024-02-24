<?php
// Generar un array con 20 números aleatorios
$numeros = array();
for ($i = 0; $i < 20; $i++) {
    $numeros[] = rand(1, 100); // Puedes ajustar el rango según tus necesidades
}

// Mostrar los números generados antes de ordenar
echo "Números generados antes de ordenar: " . implode(', ', $numeros) . "\n";

// Ordenar los números de mayor a menor utilizando el método de la burbuja
$longitud = count($numeros);
for ($i = 0; $i < $longitud - 1; $i++) {
    for ($j = 0; $j < $longitud - $i - 1; $j++) {
        if ($numeros[$j] < $numeros[$j + 1]) {
            // Intercambiar los elementos si están en el orden incorrecto
            $temp = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temp;
        }
    }
}

// Mostrar los números después de ordenar
echo "Números ordenados de mayor a menor: " . implode(', ', $numeros);
?>
