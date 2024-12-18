<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - Catálogo de Productos</title>
    <link rel="stylesheet" href="../styles/catalogo_style.css">
    <link rel="icon"  href="../img/shopping_cart_24dp_UNDEFINED_FILL0_wght400_GRAD0_opsz24.png" type="img/png">
</head>
<body>
    <header>
        <h1>Panel de Administración</h1>
        <nav>
            <a href="form_agregar_producto.php">Agregar Producto</a>
            <a href="visual_client.php">Cerrar Sesión</a>
        </nav>
    </header>
    <main>
        <section>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conexion = mysqli_connect("127.0.0.1:3306","root","","proyecto_backend");
                        $mostrar_valores = "SELECT * FROM tabla_productos";
                        $resultado = mysqli_query($conexion, $mostrar_valores);
                        while($una_fila = mysqli_fetch_assoc($resultado)){
                            $una_fila["nombre_producto"] = ucfirst($una_fila["nombre_producto"]);
                            $una_fila["tipo_producto"] = ucfirst($una_fila["tipo_producto"]);
                            echo '
                            <tr>
                                <td><img class="product-image" src="'.$una_fila["imagen_producto"].'" ></td>
                                <td>'.$una_fila["nombre_producto"].'</td>
                                <td>'."$".$una_fila["precio_productos"].'</td>
                                <td>'.$una_fila["stock_productos"].'</td>
                                <td>'.$una_fila["tipo_producto"].'</td>
                                <td>
                                    <a href="editar_producto.php?id='.$una_fila["id_producto"].'" class="btn edit">Editar</a>
                                    <a href="../views/eliminar.php?id='.$una_fila["id_producto"].'" class="btn delete">Eliminar</a>
                                </td>
                            </tr>';
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
            <div class="footer">
                <h3>Contactanos a traves de </h3>
                <a href="https://www.instagram.com/anitallaveros2017?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Nuestro instagram</a>
        </div>
    </footer>
    <script>
        //esto lo saque de chatgpt
        // Selecciona todos los enlaces con la clase "delete"
        /*document.querySelectorAll('.delete').forEach(button => {
            button.addEventListener('click', function(event) {
                // Mostrar cuadro de confirmación
                const confirmacion = confirm("¿Estás seguro de que deseas eliminar este producto?");
                if (!confirmacion) {
                    event.preventDefault(); // Cancelar el clic si el usuario selecciona "Cancelar"
                }
            });
        });*/
    </script>
</body>
</html>
