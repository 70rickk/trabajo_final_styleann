<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon"  href="../img/shopping_cart_24dp_UNDEFINED_FILL0_wght400_GRAD0_opsz24.png" type="img/png">
    <title>Tienda de accesorios</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<div class="container-fluid">
        <header>
            <div class="header" > 
                <h1>Style Ann</h1>
                <p>Tu vendedor de accesorios  favorito</p>
                <!-- (nombre totalmente random)--> 
                <nav>
                <a  href="login.html">Iniciar sesion</a>
                </nav>
            </div>
        </header>
    </div>
    <main>
        <section class="product-section">
        <?php
                        $conexion = mysqli_connect("127.0.0.1:3306","root","","proyecto_backend");
                        $mostrar_valores = "SELECT * FROM tabla_productos";
                        $resultado = mysqli_query($conexion, $mostrar_valores);
                        while($una_fila = mysqli_fetch_assoc($resultado)){
                            $una_fila["nombre_producto"] = ucfirst($una_fila["nombre_producto"]);
                            $una_fila["tipo_producto"] = ucfirst($una_fila["tipo_producto"]);
                            echo '
                    <section class="product-section">
                        <div class="product-card">
                            <img src="'.$una_fila["imagen_producto"].'" alt="Producto 2">
                            <h2> '.$una_fila["nombre_producto"].'</h2>
                            <p>'."$".$una_fila["precio_productos"].'</p>
                            <a href="#" class="btn">Comprar</a>
                        </div>  
                    </section>';}
                    ?>

    </main>
    <footer>
        <h3>Contactanos a traves de </h3>
            <a href="https://www.instagram.com/anitallaveros2017?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Nuestro instagram</a>
    </footer>
</body>
</html>

