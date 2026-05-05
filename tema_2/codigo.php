<?php

// 1. IF básico: Ejecuta si la condición es verdadera
$edad = 20;
if ($edad >= 18) {
    echo "Eres mayor de edad.";
}

// 2. IF...ELSE: Ejecuta una acción u otra
$hora = 14;
if ($hora < 12) {
    echo "Buenos días.";
} else {
    echo "Buenas tardes.";
}

// 3. IF...ELSEIF...ELSE: Evalúa múltiples condiciones secuencialmente
$nota = 85;
if ($nota >= 90) {
    echo "Excelente";
} elseif ($nota >= 70) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}
?>



/Bucle/

<?php
$contador = 1;

while ($contador <= 3) {
    echo "Intento número $contador <br>";
    $contador++;
}
?>
