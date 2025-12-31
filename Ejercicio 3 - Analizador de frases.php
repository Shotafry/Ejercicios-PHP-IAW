<?php
// La frase que hay que analizar
$texto = "PHP no está muerto… solo sigue trabajando silenciosamente igual que Cobol en el 80% de Internet";

// Pasamos todo a minúsculas para que no haya fallos con las mayúsculas
$fraseEnMinusculas = strtolower($texto);

// Separamios la frase en palabras sueltas usando los espacios
$todasLasPalabras = explode(" ", $fraseEnMinusculas);

$palabrasBuenas = [];

// Solo vamos a usar palabras que tengan 3 letras o más
foreach ($todasLasPalabras as $palabra) {
    if (strlen($palabra) >= 3) {
        $palabrasBuenas[] = $palabra;
    }
}

// Contamos cuántas veces sale cada palabra
$conteoFinal = array_count_values($palabrasBuenas);

echo "Hemos anallzado " . count($palabrasBuenas) . " palabras (las de más de 3 letras).<br>";

$repetidaMasVeces = "";
$maximoDeVeces = 0;

echo "<br>Palabras que se repiten:<br>";
foreach ($conteoFinal as $palabra => $veces) {
    // Solo enseñamos las que salen más de una vez
    if ($veces > 1) {
        echo "- La palabra '" . $palabra . "' sale " . $veces . " veces.<br>";
    }
    
    // Buscamos cuál es la que más sale de todas
    if ($veces > $maximoDeVeces) {
        $maximoDeVeces = $veces;
        $repetidaMasVeces = $palabra;
    }
}

echo "<br>La palabra más repetida de todas es: '" . $repetidaMasVeces . "' con " . $maximoDeVeces . " apariciones.";
?>