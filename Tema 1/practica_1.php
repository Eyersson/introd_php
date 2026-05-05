<?php
//esto es un comentario de una linea
# ezto tambien es un comentario
/*
este es un bloque de multiples lineas
*/
?>


<?php
    // esto es un comentario de una linea
    # esto tambien es un comentario

    /*
    esto es un bloque 
    de multiples líneas
    */

    $nombre = "juan";
    $edad = "20";

    echo $nombre; // imprime: juan

?>


<?php
    define("PI",3.1416);
    const SALUDO = "Holiss";
    echo PI; // Imprime: 3.1416

?>

<?php
    $frutas = ["Manzana", "Banano", "Uva"];
    echo $frutas[0]; //Imprime: Manzana
    echo $frutas[2]; //Imprime: Uva
?>

<?php
    $persona =
    [
        "nombre" => "Ana",
        "edad" => 25,
        "ciudad" => " Bogotá"
    ];
    echo $persona["nombre"]; //Imprime: Ana
?>


<?php

$precioProducto = 100;
$cantidad = 3;
$iva = 0.19; // 19%

$subtotal = $precioProducto * $cantidad; // Multiplicación
$totalConIva = $subtotal * (1 + $iva);

// 2. Incremento
$visitas = 10;
$visitas++; // Ahora es 11

// 3. Comparación e Identidad
$esMismoValor = (100 == "100");   // true (mismo valor)
$esMismoTipo = (100 === "100");   // false (entero vs string)

// 4. Lógicos y Ternario
$tieneDescuento = ($totalConIva > 200 && $visitas > 5); // true
$mensaje = $tieneDescuento ? "¡Tienes descuento!" : "Precio normal";

// 5. Concatenación de cadenas
echo "El total es: $" . $totalConIva . ". " . $mensaje;
?>
