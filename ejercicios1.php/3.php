<?php

$dias = array(
    "d1" => "Lunes",
    "d2" => "Martes",
    "d3" => "Miércoles",
    "d4" => "Jueves",
    "d5" => "Viernes",
    "d6" => "Sábado",
    "d7" => "Domingo"
);

$valores = array_values($dias);

for ($i = 0; $i < count($valores); $i++) {
    echo substr($valores[$i], 0, 2) . "<br>";
}
?>
