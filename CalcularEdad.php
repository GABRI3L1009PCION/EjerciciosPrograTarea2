<?php
// Fecha de nacimiento en formato 'YYYY-MM-DD'
$fechaNacimiento = '1990-05-15';

// Convertir la fecha de nacimiento a un timestamp
$timestampNacimiento = strtotime($fechaNacimiento);

// Obtener el timestamp actual
$timestampActual = time();

// Calcular la diferencia en segundos
$diferenciaSegundos = $timestampActual - $timestampNacimiento;

// Calcular la edad en años (aproximada, sin tener en cuenta los años bisiestos)
$edadEnAnios = floor($diferenciaSegundos / (365 * 24 * 60 * 60));

// Mostrar la edad con estructuras de control condicionales
if ($edadEnAnios < 0) {
    echo "Fecha de nacimiento en el futuro. Verifica la fecha.";
} elseif ($edadEnAnios == 0) {
    echo "¡Feliz primer año de vida!";
} else {
    echo "La edad aproximada es: $edadEnAnios años";
}
?>




