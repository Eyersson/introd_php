<?php

    /* Ingresar el tiempo de duración de una llamada telefónica y determinar la cantidad a pagar, de acuerdo con lo siguiente:
    a. Toda llamada que dure tres minutos o menos tienen un costo de $300.
    b. Cada minuto adicional cuesta $50.*/

    $duracion = 5; // duración de la llamada en minutos

    if ($duracion <= 3) {
        $costo = 300;
    } else {
        $minutos_extra = $duracion - 3;
        $costo = 300 + ($minutos_extra * 50);
    }

    echo "Tiempo de la llamada: " . $duracion . " minutos";
    echo "<br> El costo de la llamada es: $" . $costo;
?>