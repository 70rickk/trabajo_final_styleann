<?php 
$id_producto = $_GET["id"];
if (isset($id_producto)) {
    echo "La variable existe, el proceso es un exito!";
    echo "<br>";

    if (!empty($id_producto)) {
        echo "El proceso fue un exito!";
        $conexion = mysqli_connect("127.0.0.1:3306","root","","proyecto_backend");

        if($conexion == true) {
            $delete = "DELETE FROM tabla_productos 
                WHERE id_producto =".$id_producto;
                $resultado = mysqli_query($conexion,$delete);

            mysqli_close($conexion);

            if($resultado == true){
                echo "Se elimino con exito";
                echo "<br>";
                header('location: catalogo.php');
            }
            else{
                echo"disculpe, algo salio mal, no se a podido eliminar";
            }
        }
    }
    else{
        echo"a ocurrido un error, faltan los datos";
    }
}
else{
    echo "algo salio mal";
}
?>