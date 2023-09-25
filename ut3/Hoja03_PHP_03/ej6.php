<?php

// Array de verbos regulares
$verbos = array(
    "hablar",
    "comer",
    "escribir",
    "correr",
    "aprender"
);

// Elegir un verbo al azar
$verboElegido = $verbos[array_rand($verbos)];

// Función para conjugar un verbo en presente de indicativo
function conjugarPresente($verbo) {
    $terminaciones = [];

    if (substr($verbo, -2) == "ar") {
        $terminaciones = ["o","as","a","amos","ais","ablan"];
    } elseif (substr($verbo, -2) == "er") {
        $terminaciones = ["o","es","e","emos","eis","en"];
    } elseif (substr($verbo, -2) == "ir") {
        $terminaciones = ["o","es","e","imos","is","en"];
    }

    $verbo = substr($verbo, 0, -2);

    // Conjugar el verbo en presente de indicativo
    echo "Yo ".$verbo.$terminaciones[0]."<br>";
    echo "Tú ".$verbo.$terminaciones[1]."<br>";
    echo "Él/Ella ".$verbo.$terminaciones[2]."<br>";
    echo "Nosotros/Nosotras ".$verbo.$terminaciones[3]."<br>";
    echo "Vosotros/Vosotras ".$verbo.$terminaciones[4]."<br>";
    echo "Ellos/Ellas ".$verbo.$terminaciones[5]."<br>";
}

// Conjugar el verbo elegido
echo "Verbo elegido: $verboElegido <br><br>";
conjugarPresente($verboElegido);

?>
