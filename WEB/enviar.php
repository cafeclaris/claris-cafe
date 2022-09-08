<?php
    $destino= "cafeclaris200@gmail.com";
    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $telefono=$_POST["tel"];
    $color=$_POST["color"];
    $personas=$_POST["para cuantas personas"];
    $tamanio=$_POST["tamanio"];
    $figura=$_POST["fig"];
    $cont = "nombre: ". $nombre . "\nCorreo: ". $correo . "\nTeléfono: ". $telefono ."\nColor". $color . "\nCantidad de personas: ". $personas . "\nTamaño: ". $tamanio. "\nFigura: ". $figura;
    mail($destino, "Pedido", $cont);

    header("location: gracias.html")
?>
