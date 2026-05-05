<?php

// Mostrar los numeros del 1 al 100, usando la instrucción for y una array indexado.

$numeros = [];

// Llenar el array con números del 1 al 100
for ($i = 1; $i <= 100; $i++) {
    $numeros[] = $i;
}

// Recorrer el array y mostrar los valores
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . "<br>";
}
?>