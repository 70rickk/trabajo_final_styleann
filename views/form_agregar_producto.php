<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--estilos-->
    <link rel="stylesheet" href="../styles/form_styles.css">
    <link rel="icon"  href="../img/shopping_cart_24dp_UNDEFINED_FILL0_wght400_GRAD0_opsz24.png" type="img/png">
    <title>Agrega productos</title>
</head>
<body>
    <!-- comienzo del header -->
    <div class="container-fluid">
        <header>
            <div class="header" > 
                <h1>Style Ann</h1>
                <p>Tu vendedor de accesorios  favorito</p>
                <!-- (nombre totalmente random)--> 
            </div>
        </header>
    </div>
    <!--comienzo del nav  -->
    <nav class="navbar">
        <a class="navlink" href="visual_client.php ">Inicio</a>
    </nav>
    <!--comienzo de la parte principa-->
    <div class="principal">
        <div class="form-container">
            <main>
                <div class="mb-3">
                    <form method="post" action="agregar_producto.php" enctype="multipart/form-data">
                        <label for="exampleFormControlInput1" class="form-label"> Nombre del producto</label>
                        <input type="text" name="nombre_producto" class="form-control" id="nombre_producto" placeholder="Ingrese el nombre del producto" required>
                        <label for="exampleFormControlTextarea1" class="form-label">Stock del producto</label>
                        <input type="text" name="stock_producto" class="form-control" id="stock_producto" placeholder="Ingrese el stock del producto" required>
                        <label for="exampleFormControlInput1" class="form-label">Precio del producto</label>
                        <input type="text" name="precio_producto" class="form-control" id="precio_producto" placeholder="Ingrese el precio del producto" required>
                        <label for="exampleFormControlInput1" class="form-label">Tipo de producto</label>
                        <input type="text" name="tipo_producto" class="form-control" id="tipo_producto" placeholder="Ingrese el tipo del producto" required>
                        <label for="exampleFormControlTextarea1" class="form-label">Inserte la imagen del producto</label>
                        <input type="file" name="img_producto" class="form-control" id="img_producto" placeholder="Ingrese la imagen del producto" required>
                        <button class="button"> ingresar</button>
                    </form>
                    </div>
            </main>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <footer>
            <div class="footer">
                <h3>Contactanos a traves de :</h3>
                <a href="https://www.instagram.com/anitallaveros2017?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Nuestro instagram</a>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>