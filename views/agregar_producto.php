<?php

$nombre = $_POST["nombre_producto"];
$stock = $_POST["stock_producto"];
$precio = $_POST["precio_producto"];
$tipo_producto = $_POST["tipo_producto"];
$img_producto = $_FILES["img_producto"];


// Procesar la imagen
$tipo_archivo = pathinfo($img_producto["name"], PATHINFO_EXTENSION);
$content = file_get_contents($img_producto["tmp_name"]);
$img_base64 = "data:image/".$tipo_archivo.";base64,".base64_encode($content);

// Conexión a la base de datos
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_backend");

// Inserción en la base de datos
$ingresar = "INSERT INTO tabla_productos (nombre_producto, stock_productos, precio_productos, imagen_producto,tipo_producto) VALUES ('$nombre', '$stock', '$precio', '$img_base64', '$tipo_producto')";
$resultado = mysqli_query($conexion, $ingresar);


mysqli_close($conexion);

// Redirigir solo si no hay salida previa
if ($resultado == true) {
    header('Location: catalogo.php');
    exit; // Detener el script después de redirigir
}
if(!empty($nombre)||($stock)){
    echo "error";
}
?>

?>

