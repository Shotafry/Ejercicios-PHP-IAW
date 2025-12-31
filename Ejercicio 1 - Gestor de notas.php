<?php
// Estos son los datos del ejrcicio: nombres y sus tres notas
$estudiantes = [    
    "Ana" => [8, 7, 9],    
    "Luis" => [5, 6, 4],    
    "María" => [10, 9, 10],    
    "Carlos" => [6, 6, 6]
];

// Esta función sirve para sumar las notas y dividirlas por la cantidad que hay
function calcularPromedio($notas) {
    $sumaTotal = array_sum($notas);
    $cuantasNotas = count($notas);
    $resultadoMedia = $sumaTotal / $cuantasNotas;
    return $resultadoMedia;
}

$cuentaAprobados = 0; // Para contar cuántos pasan de 6
$cuentaSuspendos = 0; // Para contar cuantos no llegan al 6
$laMejorNota = 0; // Para guardar la nota más alta que encontremos
$elMejorAlumno = ""; // Para guardar el nombre del que tiene esa nota

// con el bucle si mira a cada estudiante de la lista uno por uno, como en javascript o parecido.
foreach ($estudiantes as $nombre => $notas) {
    $mediaAlumno = calcularPromedio($notas); // Usamos la función de arriba
    
    // Si la media es 6 o más es un aprobado, si no, es un suspenso
    if ($mediaAlumno >= 6) {
        $estado = "Aprobado";
        $cuentaAprobados = $cuentaAprobados + 1;
    } else {
        $estado = "Suspenso";
        $cuentaSuspendos = $cuentaSuspendos + 1;
    }

    // Enseñamos por pantalla el nombre, su nota media y si aprobó
    echo "Nombre: " . $nombre . " | Media: " . $mediaAlumno . " | Resultado: " . $estado . "<br>";

    // Vamos comparando para ver quién tiene la nota más alta de todos
    if ($mediaAlumno > $laMejorNota) {
        $laMejorNota = $mediaAlumno;
        $elMejorAlumno = $nombre;
    }
}

// Al final mostramos el resumen de toda la clase
echo "<br>Resumen de la clase:";
echo "<br>Han aprobado " . $cuentaAprobados . " personas";
echo "<br>Han suspendido " . $cuentaSuspendos . " personas";
echo "<br>El alumno con mejor nota es " . $elMejorAlumno . " con un " . $laMejorNota;
?>