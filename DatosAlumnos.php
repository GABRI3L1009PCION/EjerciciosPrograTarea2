<?php
// Definir el array asociativo de alumnos
$alumnos = array(
    array('alumno' => 'Gabriel', 'curso' => 'Programacion', 'nota' => '85'),
    array('alumno' => 'Cindy', 'curso' => 'Fisica', 'nota' => '92'),
    array('alumno' => 'Ioni', 'curso' => 'Calculo', 'nota' => '78'),
    array('alumno' => 'Carlos', 'curso' => 'Metodos Numericos', 'nota' => '95'),
    array('alumno' => 'Erick', 'curso' => 'Estadistica', 'nota' => '89'),
    array('alumno' => 'Andy', 'curso' => 'Matematica Discreta', 'nota' => '75'),
    array('alumno' => 'Juan', 'curso' => 'Logica de Sistemas', 'nota' => '88'),
    array('alumno' => 'Hector', 'curso' => 'Microeconomia', 'nota' => '91'),
    array('alumno' => 'Daniela', 'curso' => 'Emprendedores de Negocios', 'nota' => '87'),
    array('alumno' => 'Maria', 'curso' => 'Analogica Electronica', 'nota' => '94')
);

// Mostrar los datos de los alumnos utilizando foreach
foreach ($alumnos as $alumno) {
    echo "Nombre del alumno: " . $alumno['alumno'] . "\n";
    echo "Curso: " . $alumno['curso'] . "\n";
    echo "Nota: " . $alumno['nota'] . "\n";
    echo "-----------------------------\n";
}
?>
