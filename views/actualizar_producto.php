<?php
// Conexión a la base de datos
$conexion = mysqli_connect("127.0.0.1", "root", "", "proyecto_backend");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Validar datos enviados
$id = isset($_POST['id_producto']) ? $_POST['id_producto'] : null;
$nombre = isset($_POST['nombre_producto']) ? $_POST['nombre_producto'] : null;
$precio = isset($_POST['precio_producto']) ? $_POST['precio_producto'] : null;
$stock = isset($_POST['stock_producto']) ? $_POST['stock_producto'] : null;
$tipo = isset($_POST['tipo_producto']) ? $_POST['tipo_producto'] : null;

if (!$id || !$nombre || !$precio || !$stock || !$tipo) {
    die("Error: Por favor completa todos los campos del formulario.");
}

// Consulta de actualización
$update = "UPDATE tabla_productos 
        SET nombre_producto = '$nombre', 
            precio_productos = '$precio', 
            stock_productos = '$stock', 
            tipo_producto = '$tipo' 
        WHERE id_producto = $id";

if (mysqli_query($conexion, $update)) {
    echo "Producto actualizado con éxito.";
    header("Location: lista_productos.php");
    exit;
} else {
    echo "Error al actualizar el producto: " . mysqli_error($conexion);
}

// Cerrar conexión
mysqli_close($conexion);
?>

?>

